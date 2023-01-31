<!-- Importações principais-->
<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';

?>

<!--Area total do card-->
<div class="area-cad">

    <!-- Area para fazer o login e acessar o sistema. -->
    <div class="singIn">
        <div class="h4 title-cad ">CONTROLE DE PRODU&Ccedil;&Atilde;O DI&Aacute;RIO</div>
        <!-- COMEÇO DO FORMULÁRIO -->
        <form class="" action="/informativo-de-producao/save" method="POST">
            <input type="hidden" name="id_responsavel" value="<?= $modelLogin->id ?>">
            <input type="hidden" name="id" value="<?= $modelProducao->id ?>">
            <div class="input-size mb-1">
                <input type="text" value="LINHA" style="width: 100px; background: #ebebeb" readonly />
                <input type="text" value="TURNO" style="width: 146px; background: #ebebeb" readonly />
                <input type="text" value="PRODUTO" style="width: 100px; background: #ebebeb" readonly />
                <input type="text" value="O.P" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="PROCESSO" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="DATA" style="width: 149px; background: #ebebeb" readonly />
            </div>
            <div class="input-size mb-4" style="height: auto;">
                <select name="linha" id="" style="width: 100px;" required>
                    <option value="">LINHA</option>
                    <?php foreach ($modelLinha->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->linhas_id) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <select name="turno" id="" required>
                    <option value="">TURNO</option>
                    <?php foreach ($modelTurno->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->turnos_id) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <select name="produto" id="" style="width: 100px;" required>
                    <option value="">PRODUTO</option>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->produtos_id) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <input type="text" name="op" placeholder="Digite a O.P" value="<?= $modelProducao->op ?>" required />
                <input type="text" name="processo" placeholder="Digite o processo" value="<?= $modelProducao->processo ?>" required />
                <input type="date" style="width: auto; height: 40px" name="data" value="<?= $modelProducao->data ?>" required />
            </div>
            <!-- CABEÇALHO PERDAS -->
            <div class="h4 title-cad ">PERDAS</div>
            <div class="input-size mb-1">
                <input type="text" value="C&Oacute;DIGO DO PRODUTO" style="width: 189px; background: #ebebeb" readonly />
                <input type="text" value="PROGRAMADO" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="REALIZADO" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="DELTA" style="width: auto; background: #ebebeb" readonly />
            </div>
            <!-- FIM CABEÇALHO PERDAS -->

            <!-- COMEÇO PERDAS -->
            <div class="input-size mb-2">
                <select name="cod_produto1" id="" required>
                    <option value="">C&Oacute;DIGO DO PRODUTO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto1) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <input type="number" name="programado1" id="programado1" placeholder="PROGRAMADO" style="width: auto;" value="<?= $modelProducao->programado1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="number" name="realizado1" id="realizado1" placeholder="REALIZADO" style="width: auto;" value="<?= $modelProducao->realizado1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="text" name="delta1" id="delta1" placeholder="DELTA" value="<?= $modelProducao->delta1 ?>" style="width: auto;" readonly />
            </div>
            <div class="input-size mb-2">
                <select name="cod_produto2" id="" required>
                    <option value="">C&Oacute;DIGO DO PRODUTO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto2) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <input type="number" name="programado2" id="programado2" placeholder="Programado" value="<?= $modelProducao->programado2 ?>" style="width: auto;" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="number" name="realizado2" id="realizado2" placeholder="Realizado" value="<?= $modelProducao->realizado2 ?>" style="width: auto;" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="text" name="delta2" id="delta2" placeholder="Delta" value="<?= $modelProducao->delta2 ?>" style="width: auto;" readonly />
            </div>
            <div class="input-size mb-4">
                <select name="cod_produto3" id="" required>
                    <option value="">C&Oacute;DIGO DO PRODUTO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto3) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
                <input type="number" name="programado3" id="programado3" placeholder="Programado" value="<?= $modelProducao->programado3 ?>" style="width: auto;" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="number" name="realizado3" id="realizado3" placeholder="Realizado" value="<?= $modelProducao->realizado3 ?>" style="width: auto;" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <input type="text" name="delta3" id="delta3" placeholder="Delta" value="<?= $modelProducao->delta3 ?>" style="width: auto;" readonly />
            </div>
            <!-- FIM PERDAS -->

            <!-- CABEÇALHO DEFEITOS -->
            <div class="h4 title-cad ">DEFEITOS E JUSTIFICATIVA</div>
            <div class="input-size mb-1">
                <input type="text" value="#" style="width: 50px; background: #ebebeb" readonly />
                <input type="text" value="QTD" style="width: 50px; background: #ebebeb" readonly />
                <input type="text" value="DEFEITO" style="width: 84px; background: #ebebeb" readonly />
            </div>
            <!-- FIM CABEÇALHO DEFEITOS -->

            <!-- COMEÇO DEFEITOS -->
            <div class="input-size  mb-1">
                <input style="width: 50px;" value="1º" id="pos" readonly />
                <input style="width: 50px;" type="number" name="qtd_defeito1" placeholder="Qtd" value="<?= $modelProducao->qtd_defeito1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <select name="defeitos_id1" id="" required>
                    <option value="">DEFEITO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id1) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="input-size  mb-1">
                <input style="width: 50px;" value="2º" id="pos" readonly />
                <input style="width: 50px;" type="number" name="qtd_defeito2" placeholder="Qtd" value="<?= $modelProducao->qtd_defeito2 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <select name="defeitos_id2" id="" required>
                    <option value="">DEFEITO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id2) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="input-size  mb-3">
                <input style="width: 50px;" value="3º" id="pos" readonly />
                <input style="width: 50px;" type="number" name="qtd_defeito3" placeholder="Qtd" value="<?= $modelProducao->qtd_defeito3 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" required />
                <select name="defeitos_id3" id="" required>
                    <option value="">DEFEITO</option>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id3) {
                                                                echo "selected";
                                                            } ?>><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <!-- FIM DEFEITOS -->
            <!-- CABEÇALHO JUSTIFICATIVA -->
            <div class="input-size mb-1">
                <input type="text" value="JUSTIFICATIVA" style="width: 459px; background: #ebebeb" readonly />
            </div>
            <!-- COMEÇO JUSTIFICATIVA -->
            <div class="input-size " style="height: 80px;">
                <textarea name="justificativa" id="justificativa" placeholder="JUSTIFICATIVA" cols="60" rows="3" required><?= $modelProducao->justificativa ?></textarea>
            </div>
            <!-- FIM JUSTIFICATIVA -->

            <!-- CABEÇALHO BLOQUEIO-->
            <div class="h4 title-cad ">BLOQUEIO</div>
            <div class="input-size mb-1">
                <input type="text" value="Motivo" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="Qtd" style="width: 60px; background: #ebebeb" readonly />
                <input type="text" value="Respons&aacute;vel" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="Ação" style="width: 400px; background: #ebebeb" readonly />
            </div>
            <!-- COMEÇO BLOQUEIO-->
            <div class="input-size mb-1">
                <input type="text" name="motivo1_bloqueio" id="motivo1_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo1_bloqueio ?>" style="width: auto;" />
                <input type="text" name="qtd1_bloqueio" id="qtd1_bloqueio" placeholder="Qtd" value="<?= $modelProducao->qtd1_bloqueio ?>" style="width: 60px;" />
                <input type="text" placeholder="Respons&aacute;vel" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao1_bloqueio" id="acao1_bloqueio" placeholder="Ação" value="<?= $modelProducao->acao1_bloqueio ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="motivo2_bloqueio" id="motivo2_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo2_bloqueio ?>" style="width: auto;" />
                <input type="text" name="qtd2_bloqueio" id="qtd2_bloqueio" placeholder="Qtd" value="<?= $modelProducao->qtd2_bloqueio ?>" style="width: 60px;" />
                <input type="text" placeholder="Respons&aacute;vel" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao2_bloqueio" id="acao2_bloqueio" placeholder="Ação" value="<?= $modelProducao->acao2_bloqueio ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-3">
                <input type="text" name="motivo3_bloqueio" id="motivo3_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo3_bloqueio ?>" style="width: auto;" />
                <input type="text" name="qtd3_bloqueio" id="qtd3_bloqueio" placeholder="Qtd" value="<?= $modelProducao->qtd3_bloqueio ?>" style="width: 60px;" />
                <input type="text" placeholder="Respons&aacute;vel" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao3_bloqueio" id="acao3_bloqueio" placeholder="Ação" value="<?= $modelProducao->acao3_bloqueio ?>" style="width: 400px;" />
            </div>
            <!-- FIM BLOQUEIO-->

            <!-- CABEÇALHO SCRAP DO DIA-->
            <div class="h4 title-cad ">SCRAP DO DIA</div>
            <div class="input-size mb-1">
                <input type="text" value="C&Oacute;DIGO" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="MOTIVO" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="QTD" style="width: 60px; background: #ebebeb" readonly />
                <input type="text" value="RESPONS&Aacute;VEL" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="A&Ccedil;&Atilde;O" style="width: 400px; background: #ebebeb" readonly />
            </div>
            <!-- COMEÇO SCRAP DO DIA-->
            <div class="input-size mb-1">
                <input type="text" name="codigo1_scrap" id="codigo1_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo1_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao1_scrap" id="descricao1_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao1_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd1_scrap" id="qtd1_scrap" placeholder="QTD" value="<?= $modelProducao->qtd1_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao1_scrap" id="acao1_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao1_scrap ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="codigo2_scrap" id="codigo2_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo2_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao2_scrap" id="descricao2_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao2_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd2_scrap" id="qtd2_scrap" placeholder="QTD" value="<?= $modelProducao->qtd2_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao2_scrap" id="acao2_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao2_scrap ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="codigo3_scrap" id="codigo3_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo3_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao3_scrap" id="descricao3_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao3_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd3_scrap" id="qtd3_scrap" placeholder="QTD" value="<?= $modelProducao->qtd3_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao3_scrap" id="acao3_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao3_scrap ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="codigo4_scrap" id="codigo4_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo4_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao4_scrap" id="descricao4_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao4_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd4_scrap" id="qtd4_scrap" placeholder="QTD" value="<?= $modelProducao->qtd4_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao4_scrap" id="acao4_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao4_scrap ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="codigo5_scrap" id="codigo5_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo5_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao5_scrap" id="descricao5_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao5_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd5_scrap" id="qtd5_scrap" placeholder="QTD" value="<?= $modelProducao->qtd5_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao5_scrap" id="acao5_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao5_scrap ?>" style="width: 400px;" />
            </div>
            <div class="input-size mb-3">
                <input type="text" name="codigo6_scrap" id="codigo6_scrap" placeholder="C&Oacute;DIGO" value="<?= $modelProducao->codigo6_scrap ?>" style="width: auto;" />
                <input type="text" name="descricao6_scrap" id="descricao6_scrap" placeholder="MOTIVO" value="<?= $modelProducao->descricao6_scrap ?>" style="width: auto;" />
                <input type="text" name="qtd6_scrap" id="qtd6_scrap" placeholder="QTD" value="<?= $modelProducao->qtd6_scrap ?>" style="width: 60px;" />
                <input type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly />
                <input type="text" name="acao6_scrap" id="acao6_scrap" placeholder="A&Ccedil;&Atilde;O" value="<?= $modelProducao->acao6_scrap ?>" style="width: 400px;" />
            </div>
            <!-- FIM SCRAP DO DIA-->
            <div class="h4 title-cad ">DOWNTIME</div>
            <div class="input-size mb-1">
                <input type="text" value="HORA INICIAL" style="width: 120px; background: #ebebeb" readonly />
                <input type="text" value="HORA FINAL" style="width: 120px; background: #ebebeb" readonly />
                <input type="text" value="TEMPO PARADO" style="width: 140px; background: #ebebeb" readonly />
                <input type="text" value="SETOR RESP." style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="ATENDENTE" style="width: auto; background: #ebebeb" readonly />
                <input type="text" value="MOTIVO" style="width: auto; background: #ebebeb" readonly />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial1" id="hr_inicial1" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial1 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final1" id="hr_final1" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final1 ?>" style="width: 120px;" required />
                <input type="time" id="qtd_hr_parado1" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif1 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor1" id="setor1" placeholder="SETOR RESP." value="<?= $modelProducao->setor1 ?>" style="width: auto;" required/>
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down1" id="motivo_down1" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down1 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial2" id="hr_inicial2" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial2 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final2" id="hr_final2" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final2 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif2 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor2" id="setor2" placeholder="SETOR RESP." value="<?= $modelProducao->setor2 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down2" id="motivo_down2" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down2 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial3" id="hr_inicial3" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial3 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final3" id="hr_final3" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final3 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif3 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor3" id="setor3" placeholder="SETOR RESP." value="<?= $modelProducao->setor3 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down3" id="motivo_down3" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down3 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial4" id="hr_inicial4" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial4 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final4" id="hr_final4" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final4 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif4 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor4" id="setor4" placeholder="SETOR RESP." value="<?= $modelProducao->setor4 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down4" id="motivo_down4" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down4 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial5" id="hr_inicial5" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial5 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final5" id="hr_final5" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final5 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif5 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor5" id="setor5" placeholder="SETOR RESP." value="<?= $modelProducao->setor5 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down5" id="motivo_down5" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down5 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial6" id="hr_inicial6" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial6 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final6" id="hr_final6" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final6 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif6 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor6" id="setor6" placeholder="SETOR RESP." value="<?= $modelProducao->setor6 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down6" id="motivo_down6" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down6 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial7" id="hr_inicial7" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial7 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final7" id="hr_final7" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final7 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif7 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor7" id="setor7" placeholder="SETOR RESP." value="<?= $modelProducao->setor7 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down7" id="motivo_down7" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down7 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial8" id="hr_inicial8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial8 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final8" id="hr_final8" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final8 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif8 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor8" id="setor8" placeholder="SETOR RESP." value="<?= $modelProducao->setor8 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down8" id="motivo_down8" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down8 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial9" id="hr_inicial9" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial9 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final9" id="hr_final9" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final9 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif9 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor9" id="setor9" placeholder="SETOR RESP." value="<?= $modelProducao->setor9 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down9" id="motivo_down9" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down9 ?>" style="width: auto;" required />
            </div>
            <div class="input-size mb-1">
                <input type="text" name="hr_inicial10" id="hr_inicial10" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial10 ?>" style="width: 120px;" required />
                <input type="text" name="hr_final10" id="hr_final10" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final10 ?>" style="width: 120px;" required />
                <input type="time" placeholder="TEMPO PARADO" value="<?= $modelProducao->dif10 ?>" style="width: 140px;" readonly required />
                <input type="text" name="setor10" id="setor10" placeholder="SETOR RESP." value="<?= $modelProducao->setor10 ?>" style="width: auto;" required />
                <input type="text" placeholder="ATENDENTE" value="<?= $modelLogin->nome ?>" style="width: auto;" readonly required />
                <input type="text" name="motivo_down10" id="motivo_down10" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down10 ?>" style="width: auto;" required />
            </div>

            <!-- COMEÇO MONITOR-->
            <div class="input-size ">
                MONITOR: <?= $modelLogin->nome ?>
            </div>
            <!-- FIM MONITOR-->
            <div class=" input-size mt-2 mb-2">
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
    include 'Views/Feedback/feedbackInformativo.php';
}
?>
<!-- FIM FOOTER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/jquery.mask.js"></script>
<script>
    var SPMaskBehavior = function(val) {
            return val.replace(/\D/g, '')[0] === '2' ? 'AE:CD' : 'AB:CD';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            },
            translation: {
                "A": {
                    pattern: /[0-2]/,
                    optional: false
                },
                "B": {
                    pattern: /[0-9]/,
                    optional: false
                },
                "C": {
                    pattern: /[0-5]/,
                    optional: false
                },
                "D": {
                    pattern: /[0-9]/,
                    optional: false
                },
                "E": {
                    pattern: /[0-3]/,
                    optional: false
                }
            }
        };

    $(document).ready(function() {
        $('#hr_inicial1').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial2').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial3').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial4').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial5').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial6').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial7').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial8').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial9').mask(SPMaskBehavior, spOptions);
        $('#hr_inicial10').mask(SPMaskBehavior, spOptions);
        $('#hr_final1').mask(SPMaskBehavior, spOptions);
        $('#hr_final2').mask(SPMaskBehavior, spOptions);
        $('#hr_final3').mask(SPMaskBehavior, spOptions);
        $('#hr_final4').mask(SPMaskBehavior, spOptions);
        $('#hr_final5').mask(SPMaskBehavior, spOptions);
        $('#hr_final6').mask(SPMaskBehavior, spOptions);
        $('#hr_final7').mask(SPMaskBehavior, spOptions);
        $('#hr_final8').mask(SPMaskBehavior, spOptions);
        $('#hr_final9').mask(SPMaskBehavior, spOptions);
        $('#hr_final10').mask(SPMaskBehavior, spOptions);

        $("#realizado1").keyup(function() {
            var realizado1 = parseInt(document.getElementById('realizado1').value, 10);
            var programado1 = parseInt(document.getElementById('programado1').value, 10);

            document.getElementById('delta1').value = realizado1 - programado1;
        });

        $("#programado1").keyup(function() {
            var realizado1 = parseInt(document.getElementById('realizado1').value, 10);
            var programado1 = parseInt(document.getElementById('programado1').value, 10);

            document.getElementById('delta1').value = realizado1 - programado1;
        });
        $("#realizado2").keyup(function() {
            var realizado2 = parseInt(document.getElementById('realizado2').value, 10);
            var programado2 = parseInt(document.getElementById('programado2').value, 10);

            document.getElementById('delta2').value = realizado2 - programado2;
        });

        $("#programado2").keyup(function() {
            var realizado2 = parseInt(document.getElementById('realizado2').value, 10);
            var programado2 = parseInt(document.getElementById('programado2').value, 10);

            document.getElementById('delta2').value = realizado2 - programado2;
        });
        $("#realizado3").keyup(function() {
            var realizado3 = parseInt(document.getElementById('realizado3').value, 10);
            var programado3 = parseInt(document.getElementById('programado3').value, 10);

            document.getElementById('delta3').value = realizado3 - programado3;
        });

        $("#programado3").keyup(function() {
            var realizado3 = parseInt(document.getElementById('realizado3').value, 10);
            var programado3 = parseInt(document.getElementById('programado3').value, 10);

            document.getElementById('delta3').value = realizado3 - programado3;
        });
    });

    function FilterInput(event) {
        var keyCode = ('which' in event) ? event.which : event.keyCode;

        isNotWanted = (keyCode == 69 || keyCode == 107 || keyCode == 109 || keyCode == 187 || keyCode == 189 || keyCode == 38 || keyCode == 40);
        return !isNotWanted;
    };

    function handlePaste(e) {
        var clipboardData, pastedData;

        // Get pasted data via clipboard API
        clipboardData = e.clipboardData || window.clipboardData;
        pastedData = clipboardData.getData('Text').toUpperCase();

        if (pastedData.indexOf('E') > -1) {
            //alert('found an E');
            e.stopPropagation();
            e.preventDefault();
        }
    };
</script>