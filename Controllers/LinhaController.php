<?php

namespace controle_de_producao\Controllers;

use controle_de_producao\Models\LinhaModel;
use controle_de_producao\Models\SetorModel;

//Criando o Controller da Linha
class LinhaController
{

	//Método para exibir a pagina de cadastro do Linha.
	public static function index()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelLinha = new LinhaModel();
			$modelSetor = new SetorModel();
			if (isset($_GET['id'])) {
				$modelLinha = $modelLinha->getById((int) $_GET['id']);
			}
			$modelSetor->getAllRows();
			//importando a view 
			include 'Views/Linha/linha.php';
		} else {
			header('location: /');
		}
	}


	//Método para salvar o Linha
	public static function ver_linhas()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelLinha = new LinhaModel();
			$modelLinha->getAllRows();
			//importando a view 
			include 'Views/Linha/ver_linha.php';
		} else {
			header('location: /');
		}
	}


	//Método para salvar o Linha
	public static function save()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$model = new LinhaModel();
			$model->nome = $_POST['nome'];
			$model->id = $_POST['id'];
			$model->setor_id = $_POST['setor_id'];
			//Pegando os dados do formulário.

			$obj = $model->save();

			if ($obj) {
				header('location: /linhas?message=success-create&id=' . $model->id);
			} else {
				header('location: /ver-linhas?message=error-create');
			}
		} else {
			header('location: /');
		}
	}

	public static function delete()
	{
		if (isset($_SESSION['login'])) {
			$linha = new LinhaModel();

			$obj = $linha->delete((int) $_GET['id']);

			if ($obj === true) {
				header('location: /ver-linhas?message=success-delete');
			} else if ($obj === false) {
				header('location: /ver-linhas?message=error-delete');
			}
		} else {
			header('location: /');
		}
	}
}
