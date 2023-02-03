<?php

namespace Controllers;

use Models\AtendenteModel;

//Criando o Controller do Atendente
class AtendenteController
{
	//Método para exibir a pagina de cadastro do Atendente.
	public static function index()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelAtendente = new AtendenteModel();
			if (isset($_GET['id'])) {
				$modelAtendente = $modelAtendente->getById((int) $_GET['id']);
			}
			//importando a view 
			include 'Views/Atendente/atendente.php';
		} else {
			header('location: /');
		}
	}

	//Método para salvar o Atendente
	public static function ver_atendentes()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$modelAtendente = new AtendenteModel();
			$modelAtendente->getAllRows();
			//importando a view 
			include 'Views/Atendente/ver_atendente.php';
		} else {
			header('location: /');
		}
	}

	//Método para salvar o Atendente
	public static function save()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$model = new AtendenteModel();
			//Pegando os dados do formulário.
			$model->nome = $_POST['nome'];
			$model->id = $_POST['id'];

			$obj = $model->save();

			if ($obj) {
				header('location: /atendentes?message=success-create&id=' . $model->id);
			} else {
				header('location: /ver-atendentes?message=error-create');
			}
		} else {
			header('location: /');
		}
	}
	public static function delete()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$atendente = new AtendenteModel();

			$obj = $atendente->delete((int) $_GET['id']);

			if ($obj === true) {
				header('location: /ver-atendentes?message=success-delete');
			} else if ($obj === false) {
				header('location: /ver-atendentes?message=error-delete');
			}
		} else {
			header('location: /');
		}
	}
}
