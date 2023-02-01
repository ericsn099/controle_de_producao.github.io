<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>
<!--Area total do card-->
<div class="area-cad">

	<!-- Area para fazer o login e acessar o sistema. -->
	<div class="singIn" style="width: 400px;">
		<div class="h4 title-cad ">ACESSE SUA CONTA</div>
		<form class="d-flex" action="/login/validarLogin" method="POST">
			<?php
			if (isset($_GET["erro"])) { ?>
				<div class="alert alert-danger " role="alert">
					<?php echo "Acesso Inválido" ?>
					<!-- RETORNA MENSAGEM DE ERRO SE A SENHA, USUÁRIO OU TIPO DE USUÁRIO ESTIVER INCORRETA-->
				</div>
			<?php } ?>
			<div class="col-md w-100">
				<div class="input-group mb-3">
					<div class="form-floating">
						<input type="text" name="login" id="login" class="form-control" placeholder="NOME" aria-label="NOME" aria-describedby="addon-wrapping" autofocus required>
						<label for="login">LOGIN</label>
					</div>
				</div>
			</div>
			<div class="col-md w-100">
				<div class="input-group mb-3">
					<div class="form-floating">
						<input type="password" name="senha" class="form-control" placeholder="SENHA" aria-label="SENHA" aria-describedby="addon-wrapping" required>
						<label for="senha">SENHA</label>
					</div>
				</div>
			</div>
			<div class="input-size mt-2 mb-2">
				<input type="submit" value="ENTRAR" class="btn btn-primary" />
			</div>

		</form>
		<div class="card-footer mb-3">
			<div class="d-flex justify-content-center links">
				N&atilde;o possui uma conta?&nbsp;<a href="/cadastro">Criar</a>
			</div>
		</div>
	</div>

</div>



<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
	// Minúsculo
	$('#login').on('keyup', (ev) => {
		$('#login').val($('#login').val().toLowerCase());
	});
	
</script>