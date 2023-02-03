<?php

namespace Controllers;

use Models\DefeitoModel;

//Criando o Controller do Defeito
class DefeitoController
{
	//Método para exibir a pagina de cadastro do Defeito.
	public static function index()
	{
		if (isset($_SESSION['login'])) {
			//Incluindo a Model
			$modelDefeito = new DefeitoModel();
			if (isset($_GET['id'])) {
				$modelDefeito = $modelDefeito->getById((int) $_GET['id']);
			}
			//importando a view 
			include 'Views/Defeito/defeito.php';
		} else {
			header('location: /');
		}
	}

	//Método para salvar o Defeito
	public static function ver_defeitos()
	{
		if (isset($_SESSION['login'])) {
			//Incluindo a Model
			$modelDefeito = new DefeitoModel();
			$modelDefeito->getAllRows();
			//importando a view 
			include 'Views/Defeito/ver_defeito.php';
		} else {
			header('location: /');
		}
	}

	//Método para salvar o Defeito
	public static function save()
	{
		if (isset($_SESSION['login'])) {

			//Criando objeto
			$model = new DefeitoModel();
			$model->cod_defeito = $_POST['cod_defeito'];
			$model->nome = $_POST['nome'];
			$model->id = $_POST['id'];
			//Pegando os dados do formulário.

			$obj = $model->save();

			if ($obj) {
				header('location: /defeitos?message=success-create&id=' . $model->id);
			} else {
				header('location: /ver-defeitos?message=error-create');
			}
		} else {
			header('location: /');
		}
	}

	public static function delete()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$defeito = new DefeitoModel();

			$obj = $defeito->delete((int) $_GET['id']);

			if ($obj === true) {
				header('location: /ver-defeitos?message=success-delete');
			} else if ($obj === false) {
				header('location: /ver-defeitos?message=error-delete');
			}
		} else {
			header('location: /');
		}
	}
}
