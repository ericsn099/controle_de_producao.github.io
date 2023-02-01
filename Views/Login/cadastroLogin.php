<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>
<!--Area total do card-->
<div class="area-cad">

	<!-- Area para fazer o login e acessar o sistema. -->
	<div class="singIn" style="width: 400px;">
		<form class="d-flex" action="/login/save" method="POST">
			<div class="h4 title-cad ">CADASTRE-SE</div>

			<div class="col-md w-100">
				<div class="input-group mb-3">
					<div class="form-floating">
						<input type="text" name="nome" class="form-control" placeholder="NOME" aria-label="nome" aria-describedby="addon-wrapping" autofocus required>
						<label for="nome">NOME</label>
					</div>
				</div>
			</div>
			<div class="col-md w-100">
				<div class="input-group mb-3">
					<div class="form-floating">
						<input type="text" name="login" id="login" class="form-control" placeholder="LOGIN" aria-label="login" aria-describedby="addon-wrapping" required>
						<label for="login">LOGIN</label>
					</div>
				</div>
			</div>
			<div class="col-md w-100">
				<div class="input-group mb-3">
					<div class="form-floating">
						<input type="password" name="senha" class="form-control" placeholder="SENHA" aria-label="senha" aria-describedby="addon-wrapping" required>
						<label for="senha">SENHA</label>
					</div>
				</div>
			</div>
			<div class="input-size mt-2 mb-2">
				<input type="submit" value="SALVAR" class="btn btn-primary" />
			</div>
		</form>
		<div class="card-footer mb-3">
			<div class="d-flex justify-content-center links">
				Já possui uma conta?&nbsp;<a href="/login">Entrar</a>
			</div>
		</div>
	</div>

</div>



<!-- FOOTER-->
<?php
if (isset($_GET['message'])) {
    include 'Views/Feedback/feedbackLogin.php';
}
include 'Views/partials/Footer/footer.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
	// Minúsculo
	$('#login').on('keyup', (ev) => {
		$('#login').val($('#login').val().toLowerCase());
	});
	
</script>