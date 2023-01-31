<?php

namespace controle_de_producao\Controllers;

use controle_de_producao\Models\LoginModel;

//Criando o controller da página Home
class HomeController
{
	//Criando o Método para exibir a pagina Home.
	public static function index()
	{
		//criando Objeto 
		$loginModel = new LoginModel();
		//Verificando se existe sessão.
		if (isset($_SESSION['login'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['login']);
		}
		include 'Views/Home/home.php';
	}
}
