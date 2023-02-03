<?php

namespace Controllers;

use Models\ProdutoModel;

//Criando o Controller do Produto
class ProdutoController
{
	//Método para exibir a pagina de cadastro do Produto.
	public static function index()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelProduto = new ProdutoModel();
			if (isset($_GET['id'])) {
				$modelProduto = $modelProduto->getById((int) $_GET['id']);
			}
			//importando a view 
			include 'Views/Produto/produto.php';
		} else {
			header('location: /');
		}
	}
	public static function ver_produtos()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelProduto = new ProdutoModel();
			$modelProduto->getAllRows();
			//importando a view 
			include 'Views/Produto/ver_produto.php';
		} else {
			header('location: /');
		}
	}


	//Método para salvar 
	public static function save()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$model = new ProdutoModel();
			$model->cod_produto = $_POST['cod_produto'];
			$model->nome = $_POST['nome'];
			$model->id = $_POST['id'];
			//Pegando os dados do formulário.

			$obj = $model->save();

			if ($obj) {
				header('location: /produtos?message=success-create&id=' . $model->id);
			} else {
				header('location: /ver-produtos?message=error-create');
			}
		} else {
			header('location: /');
		}
	}

	public static function delete()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$produto = new ProdutoModel();

			$obj = $produto->delete((int) $_GET['id']);

			if ($obj === true) {
				header('location: /ver-produtos?message=success-delete');
			} else if ($obj === false) {
				header('location: /ver-produtos?message=error-delete');
			}
		} else {
			header('location: /');
		}
	}
}
