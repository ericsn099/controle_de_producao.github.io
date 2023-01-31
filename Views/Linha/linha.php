<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';

?>

<!--Area total do card-->
<div class="area-cad">

    <!-- Area para fazer o login e acessar o sistema. -->
    <div class="singIn p-2">
        <!-- COMEÇO DO FORMULÁRIO -->
        <form class="row d-flex flex-row was-validated" action="/linhas/save" method="POST">
            <div class="h4 title-cad ">LINHAS</div>
            <input type="hidden" name="id" value="<?= $modelLinha->id ?>">
            <div class="col-md">
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" name="nome" class="form-control" placeholder="NOME" aria-label="NOME" value="<?= $modelLinha->nome ?>" aria-describedby="addon-wrapping" autofocus required>
                        <label for="codigo">NOME</label>
                    </div>
                </div>
                <select class="form-select" name="setor_id" id="validationDefault04" required>
                    <option value="">SETOR</option>
                    <?php foreach ($modelSetor->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelLinha->setor_id) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
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
if (isset($_GET['message'])) {
    include 'Views/Feedback/feedbackLinha.php';
}
include 'Views/partials/Footer/footer.php';

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