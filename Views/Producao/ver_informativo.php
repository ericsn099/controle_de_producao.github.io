<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>
<!--Area total do card-->
<div class="area-cad" style="padding: 0 0;">

    <!-- Area para fazer o login e acessar o sistema. -->
    <div class="singIn p-2">
        <div class="h4 title-cad ">CONTROLE DE PRODU&Ccedil;&Atilde;O</div>
        <div class="input-group mb-1">
            <div class="form-floating">
                <input type="text" class="form-control" name="data" id="data" placeholder="DIGITE PARA PESQUISAR" autofocus>
                <label for="data">PESQUISAR</label>
            </div>
        </div>

        <table id="dtHorizontalExample" class="table table-striped">
            <thead>
                <tr>
                    <th>LINHA</th>
                    <th>DATA</th>
                    <th>RESPONS&Aacute;VEL</th>
                </tr>
            </thead>
            <tbody id="table">

            </tbody>
        </table>
        <a class="btn btn-primary" onclick="tableToExcel('tableExcel', 'RELATORIO')">EXPORTAR PARA EXCEL</a>
        <div id="excel" class="">
            <table class="table table-bordered " id="tableExcel">
                <thead>
                    <tr>
                        <th>DATA</th>
                        <th>LINHA</th>
                        <th>PRODUTO</th>
                        <th>TURNO</th>
                        <th>PROCESSO</th>
                        <th>O.P</th>
                        <th>#</th>
                        <th>C&Oacute;DIGO</th>
                        <th>PROGRAMADO</th>
                        <th>REALIZADO</th>
                        <th>DELTA</th>
                        <th>JUSTIFICATIVA</th>
                        <th>#</th>
                        <th>QUANTIDADE</th>
                        <th>C&Oacute;DIGO DO DEFEITO</th>
                        <th>#</th>
                        <th>MOTIVO</th>
                        <th>QUANTIDADE</th>
                        <th>RESPONS&Aacute;VEL</th>
                        <th>A&Ccedil;&Atilde;O</th>
                        <th>#</th>
                        <th>C&Oacute;DIGO DO PRODUTO</th>
                        <th>DESCRICAO</th>
                        <th>QUANTIDADE</th>
                        <th>RESPONS&Aacute;VEL</th>
                        <th>MOTIVO</th>
                        <th>A&Ccedil;&Atilde;O</th>
                        <th>#</th>
                        <th>HORA INICIAL</th>
                        <th>HORA FINAL</th>
                        <th>TEMPO PARADO</th>
                        <th>SETOR</th>
                        <th>ATENDENTE</th>
                        <th>MOTIVO</th>
                    </tr>
                </thead>
                <tbody id="tableExcelAjax">
                   
                </tbody>
            </table>
        </div>
    </div> <!-- Final da area para efetuar Login -->

</div>

<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/tableToExcel.js"></script>
<script>
    $(document).ready(function() {
        load_data();
        load_dataExcel();
        function load_data(search) {
            $.ajax({
                url: "/ajax",
                method: "POST",
                data: {
                    search: search
                },
                success: function(data) {
                    $('#table').html(data);
                }
            });
        }
        $('#data').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
        function load_dataExcel(search) {
            $.ajax({
                url: "/ajax-excel",
                method: "POST",
                data: {
                    search: search
                },
                success: function(data) {
                    $('#tableExcelAjax').html(data);
                }
            });
        }
        $('#data').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_dataExcel(search);
            } else {
                load_dataExcel();
            }
        });
    });
</script>