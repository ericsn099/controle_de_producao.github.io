<div class="menu-mobile">
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
</div>
<?php
if (!isset($_SESSION['email'])) {
?>

	<div class="menu-mobile-rigth">
		<nav>
			<ul>
				<li>
					<a href="/adoption" class="active">Quero adotar</a>
				</li>
				<li>
					<a href="/singup">Entrar</a>
				</li>
				<li>
					<a href="/contact">contato</a>
				</li>
			</ul>
		</nav>
	</div>
<?php
} elseif (isset($_SESSION['email']) && $_SESSION['tipo_usuario'] == 1) { ?>

	<div class="menu-mobile-rigth">
		<nav>
			<ul>
				<li>
					<a href="/adoption" class="active">Quero adotar</a>
				</li>
				<li>
					<a href="/seedoaction">Ver doações</a>
				</li>
				<li>
					<a href="/contact">Contato</a>
				</li>
				<li>
					<a href="../../Controllers/sair.php">Sair</a>
				</li>

			</ul>
		</nav>
	</div>
<?php
} elseif (isset($_SESSION['email']) && $_SESSION['tipo_usuario'] == 2) { ?>

	<div class="menu-mobile-rigth">
		<nav>
			<ul>
				<li>
					<a href="/adoption" class="active">Quero adotar</a>
				</li>
				<li>
					<a href="#" class="doacao">Doar</a>
				</li>
				<li>
					<a href="/mydoaction">Minhas Doações</a>
				</li>
				<li>
					<a href="/contact">contato</a>
				</li>
				<li>
					<a href="../../Controllers/sair.php">sair</a>
				</li>
			</ul>
		</nav>
	</div>
<?php
} ?>
