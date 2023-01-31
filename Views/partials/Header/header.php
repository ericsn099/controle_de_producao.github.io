<!DOCTYPE html>
<html lang="pt-br">

<!-- Cabeçalho principal com as importações do CSS -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>
	<title>Informativo de produ&ccedil;&atilde;o</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../css/myCss.css" />
	<link rel="stylesheet" href="../../../css/modal.css" />
</head>

<body style="--bs-body-color: #000;" id="body">
	<?php
	//Se não existe sessão será exibido esse menu.
	if (!isset($_SESSION['login'])) {
	?>

		<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" id="navbar">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">LOGO<span>MARCA</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/login">ENTRAR</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<?php
		//Se a sessão existe e o usuário logado for do tipo_usuario 1, que é a ong.
		//Será exibido esse menu.		
	} else if (isset($_SESSION['login'])) { ?>
		<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" id="navbar">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">LOGO<span>MARCA</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/">HOME</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								CADASTROS
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/informativo-de-producao">INFORMATIVO DE PRODU&Ccedil;&Atilde;O</a></li>
								<li><a class="dropdown-item" href="/linhas">LINHAS</a></li>
								<li><a class="dropdown-item" href="/produtos">PRODUTOS</a></li>
								<li><a class="dropdown-item" href="/defeitos">DEFEITOS</a></li>
								<li><a class="dropdown-item" href="/setores">SETORES</a></li>
								<li><a class="dropdown-item" href="/atendentes">ATENDENTES</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								VER INFORMA&Ccedil;&Otilde;ES
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/informativos">INFORMATIVO DE PRODU&Ccedil;&Atilde;O</a></li>
								<li><a class="dropdown-item" href="/ver-linhas">LINHAS</a></li>
								<li><a class="dropdown-item" href="/ver-produtos">PRODUTOS</a></li>
								<li><a class="dropdown-item" href="/ver-defeitos">DEFEITOS</a></li>
								<li><a class="dropdown-item" href="/ver-setores">SETORES</a></li>
								<li><a class="dropdown-item" href="/ver-atendentes">ATENDENTES</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/Controllers/sair.php">SAIR</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active" href="#">BEM VINDO <?php echo $_SESSION['login'] ?></a>
							
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<?php
		//Se a sessão existe e o usuário logado for do tipo_usuario 2, que é o doador.
		//Será exibido esse menu.	
	} else {
		echo "Erro!!";
	}

	?>