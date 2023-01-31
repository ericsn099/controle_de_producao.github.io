<?php
namespace controle_de_producao\Controllers;

use controle_de_producao\Models\SetorModel;

//Criando o Controller do Setor
class SetorController
{
	//Método para exibir a pagina de cadastro do Setor.
	public static function index()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelSetor = new SetorModel();
			if (isset($_GET['id'])) {
				$modelSetor = $modelSetor->getById((int) $_GET['id']);
			}
			//importando a view 
			include 'Views/Setor/setor.php';
		} else {
			header('location: /');
		}
	}


	//Método para salvar o Setor
	public static function ver_setores()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelSetor = new SetorModel();
			$modelSetor->getAllRows();
			//importando a view 
			include 'Views/Setor/ver_setor.php';
		} else {
			header('location: /');
		}
	}


	//Método para salvar o Setor
	public static function save()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$model = new SetorModel();
			$model->nome = $_POST['nome'];
			$model->id = $_POST['id'];
			//Pegando os dados do formulário.

			$obj = $model->save();

			if ($obj) {
				header('location: /setores?message=success-create&id=' . $model->id);
			} else {
				header('location: /ver-setores?message=error-create');
			}
		} else {
			header('location: /');
		}
	}
	public static function delete()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$setor = new SetorModel();

			$obj = $setor->delete((int) $_GET['id']);

			if ($obj === true) {
				header('location: /ver-setores?message=success-delete');
			} else if ($obj === false) {
				header('location: /ver-setores?message=error-delete');
			}
		} else {
			header('location: /');
		}
	}
}
