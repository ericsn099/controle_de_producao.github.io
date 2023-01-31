<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';

?>
<!--Area total do card-->
<div class="area-cad">

    <!-- Area para fazer o login e acessar o sistema. -->
    <div class="singIn p-2">
    <div class="h4 title-cad ">ATENDENTES</div>
        <!-- COMEÇO A TABELA -->
        <div class="input-group mb-1">
            <div class="form-floating">
                <input type="text" class="form-control" name="filter" id="filter" placeholder="DIGITE PARA PESQUISAR" autofocus>
                <label for="codigo">DIGITE PARA PESQUISAR</label>
            </div>
        </div>
        <table class="table table-striped" id="tableAtendente"> 
            <thead>
                <tr>
                    <th>NOME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelAtendente->rows as $item) : ?>
                    <tr>
                        <td><?= $item->nome ?></td>
                        <td><a href="/atendentes?id=<?= $item->id ?>" class="link-primary">ATUALIZAR</a></td>
                        <td><a href="javascript:func()" onclick="confirmacao('<?= $item->id ?>')" class="link-primary">EXCLUIR</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div> <!-- Final da area para efetuar Login -->
</div>

<!-- FOOTER -->

<?php
if (isset($_GET['message'])) {
    include 'Views/Feedback/feedbackAtendente.php';
}
include 'Views/partials/Footer/footer.php';

?>
<!-- FIM FOOTER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/bootbox.all.min.js"></script>
<script src="/js/filter.js"></script>

<script>
    function confirmacao(id) {
        bootbox.confirm({
            message: 'TEM CERTEZA QUE DESEJA EXCLUIR?',
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> NÃO'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> SIM'
                }
            },
            callback: function(result) {
                if (result === true) {
                    window.location.href = "/atendentes/delete?id=" + id;
                    
                }
            }
        });
    }
</script>