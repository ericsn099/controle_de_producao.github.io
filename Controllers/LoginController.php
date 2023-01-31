<?php

namespace controle_de_producao\Controllers;

use controle_de_producao\Models\LoginModel;

//Criando o Controller do Login
class LoginController
{
	//Criando o método para o controle do Login
	public static function index()
	{	//Incluindo a model login e View SingUp
		include 'Views/Login/login.php';
	}
	public static function cadastroView()
	{	//Incluindo a model login e View SingUp
		include 'Views/Login/cadastroLogin.php';
	}

	//Método para validar o Login 
	public static function validarLogin()
	{
		if (isset($_POST['login']) && $_POST['senha']) {
			//Criando objeto
			$modelLogin = new LoginModel();
			$modelLogin->login = $_POST['login'];
			$modelLogin->senha = $_POST['senha'];
			//Se existe uma sessão e o tipo de usuário for 2, o header vai mudar para o tipo doador

			$validacao = $modelLogin->validarLogin($modelLogin->login, $modelLogin->senha);

			if ($validacao) {
				$_SESSION["login"] = $modelLogin->login;
				header("location: /");
			} else {
				header("location: /login?erro");
			}
		} else {
			header('location: /');
		}
	}

	//Método para salvar 
	public static function save()
	{
		//Criando objeto
		$model = new LoginModel();
		$model->login = $_POST['login'];
		$model->nome = $_POST['nome'];
		$model->senha = $_POST['senha'];
		//Pegando os dados do formulário.

		$obj = $model->save();

		if ($obj) {
			header('location: /cadastro?message=success-create');
		} else {
			header('location: /cadastro?message=error-create');
		}
	}
}
