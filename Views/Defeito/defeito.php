<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';

?>

<!--Area total do card-->
<div class="area-cad">

    <!-- Area para fazer o login e acessar o sistema. -->
    <div class="singIn p-2">
        <!-- COMEÇO DO FORMULÁRIO -->
        <form class="row d-flex flex-row was-validated" action="/defeitos/save" method="POST">
            <div class="h4 title-cad ">DEFEITOS</div>
            <input type="hidden" name="id" value="<?= $modelDefeito->id ?>">
            <div class="col-md">
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" name="cod_defeito" class="form-control" placeholder="CODIGO DO DEFEITO" value="<?= $modelDefeito->cod_defeito ?>" aria-label="CODIGO DO DEFEITO" aria-describedby="addon-wrapping" autofocus required>
                        <label for="codigo">CODIGO DO DEFEITO</label>
                    </div>
                </div>
                <div class="input-group mb-1">
                    <div class="form-floating">
                        <input type="text" name="nome" class="form-control" placeholder="NOME" aria-label="NOME" value="<?= $modelDefeito->nome ?>" aria-describedby="addon-wrapping" required>
                        <label for="codigo">NOME</label>
                    </div>
                </div>
            </div>

            <!-- FIM MONITOR-->
            <div class="input-size mt-2 mb-2">
                <input type="submit" value="Salvar" class="btn btn-primary" />
            </div>
            <!-- FIM DO FORMULÁRIO -->
        </form>
    </div> <!-- Final da area para efetuar Login -->
</div>

<!-- FOOTER -->

<?php
include 'Views/partials/Footer/footer.php';

if (isset($_GET['message'])) {
    include 'Views/Feedback/feedbackDefeito.php';
}
?>
<!-- FIM FOOTER-->
<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>