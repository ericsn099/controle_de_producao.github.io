<div id="esconder">
    <!-- Importações principais-->
    <?php
    include './Views/partials/Header/header.php';
    include './Views/partials/Header/mobile.php';
    if ($_SESSION['login'] === $modelProducao->usuario_login && isset($_GET['id'])) {
        $readonly = "";
        $disabled = "";
    } else if ($_SESSION['login'] != $modelProducao->usuario_login && isset($_GET['id'])) {
        $readonly = "readonly";
        $disabled = "disabled";
    } else {
        $readonly = "";
        $disabled = "";
    }
    ?>

    <!--Area total do card-->
    <div class="area-cad">
        <!-- Area para fazer o login e acessar o sistema. -->
        <div class="singIn ">
            <!-- COMEÇO DO FORMULÁRIO -->
            <form class="row d-flex flex-row was-validated" action="/informativo-de-producao/save" method="POST">
                <div class="h4 title-cad ">CONTROLE DE PRODU&Ccedil;&Atilde;O DI&Aacute;RIO</div>
                <input type="hidden" name="id_responsavel" value="<?= $modelLogin->id ?>">
                <input type="hidden" name="id" value="<?= $modelProducao->id ?>">
                <input type="hidden" name="totalhora" id="totalInput">

                <div class="row">
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select class="form-select" name="linha" id="validationDefault04" autofocus <?= $readonly ?> required>
                                    <option value="">LINHA</option>
                                    <?php foreach ($modelLinha->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->linhas_id) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->nome ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="validationDefault04">LINHA</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select class="form-select" name="turno" id="validationDefault04" <?= $readonly ?> required>
                                    <option value="">TURNO</option>
                                    <?php foreach ($modelTurno->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->turnos_id) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->nome ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="validationDefault04">TURNO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select class="form-select" name="produto" id="validationDefault04" <?= $readonly ?> required>
                                    <option value="">PRODUTO</option>
                                    <?php foreach ($modelProduto->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->produtos_id) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->nome ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="validationDefault04">PRODUTO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="op" id="op" placeholder="OP" value="<?= $modelProducao->op ?>" <?= $readonly ?> required>
                                <label for="op" id="op">OP</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="processo" id="processo" placeholder="PROCESSO" value="<?= $modelProducao->processo ?>" <?= $readonly ?> required>
                                <label for="processo">PROCESSO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" name="data" type="date" id="data" value="<?= $modelProducao->data ?>" <?= $readonly ?> required>
                                <label for="data">DATA</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CABEÇALHO PERDAS -->
                <div class="h4 title-cad ">PERDAS</div>
                <div class="row">
                    <div class="w-25">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select name="cod_produto1" class="form-select" id="cod_produto1" <?= $readonly ?> required>
                                    <option value="">1-C&Oacute;DIGO DO PRODUTO</option>
                                    <?php foreach ($modelProduto->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto1) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->cod_produto ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="cod_produto1">1-C&Oacute;DIGO DO PRODUTO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select name="cod_produto2" class="form-select" id="cod_produto2" <?= $readonly ?> required>
                                    <option value="">2-C&Oacute;DIGO DO PRODUTO</option>
                                    <?php foreach ($modelProduto->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto2) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->cod_produto ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="cod_produto2">2-C&Oacute;DIGO DO PRODUTO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <select name="cod_produto3" class="form-select" id="cod_produto3" <?= $readonly ?> required>
                                    <option value="">3-C&Oacute;DIGO DO PRODUTO</option>
                                    <?php foreach ($modelProduto->rows as $item) : ?>
                                        <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->cod_produto3) {
                                                                                echo "selected";
                                                                            } ?>><?= $item->cod_produto ?></option>
                                    <?php endforeach ?>
                                </select>
                                <label for="cod_produto3">3-C&Oacute;DIGO DO PRODUTO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="programado1" id="programado1" placeholder="PROGRAMADO" value="<?= $modelProducao->programado1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="programado1" id="programado1">PROGRAMADO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="programado2" id="programado2" placeholder="PROGRAMADO" value="<?= $modelProducao->programado2 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="programado2" id="programado2">PROGRAMADO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="programado3" id="programado3" placeholder="PROGRAMADO" value="<?= $modelProducao->programado3 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="programado3" id="programado3">PROGRAMADO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="realizado1" id="realizado1" placeholder="REALIZADO" value="<?= $modelProducao->realizado1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="validationDefault02">REALIZADO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="realizado2" id="realizado2" placeholder="REALIZADO" value="<?= $modelProducao->realizado2 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="validationDefault02">REALIZADO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="realizado3" id="realizado3" placeholder="REALIZADO" value="<?= $modelProducao->realizado3 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required>
                                <label for="validationDefault02">REALIZADO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="delta1" id="delta1" placeholder="DELTA" value="<?= $modelProducao->delta1 ?>" readonly>
                                <label for="validationDefaultUsername">DELTA</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="delta2" id="delta2" placeholder="DELTA" value="<?= $modelProducao->delta2 ?>" readonly>
                                <label for="validationDefaultUsername">DELTA</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="delta3" id="delta3" placeholder="DELTA" value="<?= $modelProducao->delta3 ?>" readonly>
                                <label for="validationDefaultUsername">DELTA</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <textarea class="form-control" id="validationTextarea" name="justificativa" placeholder="JUSTIFICATIVA" style="height: 180px;" maxlength="200" <?= $readonly ?> required><?= $modelProducao->justificativa ?></textarea>
                                <label for="validationTextarea">JUSTIFICATIVA</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="h4 title-cad ">DEFEITOS</div>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">1º</span>
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd_defeito1" id="qtd_defeito1" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd_defeito1 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="qtd_defeito1">QUANTIDADE</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">2º</span>
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd_defeito2" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd_defeito2 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="qtd_defeito2">QUANTIDADE</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">3º</span>
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd_defeito3" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd_defeito3 ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="qtd_defeito3">QUANTIDADE</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h4 title-cad "></div>
                        <div class="form-floating mb-1">
                            <select class="form-select md-3" name="defeitos_id1" id="defeitos_id1" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id1) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_defeito ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="defeitos_id1">C&Oacute;DIGO DO DEFEITO</label>
                        </div>
                        <div class="form-floating mb-1">
                            <select class="form-select md-3" name="defeitos_id2" id="defeitos_id2" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id2) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_defeito ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="defeitos_id2">C&Oacute;DIGO DO DEFEITO</label>
                        </div>
                        <div class="form-floating mb-1">
                            <select class="form-select md-3" name="defeitos_id3" id="defeitos_id3" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->defeitos_id3) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_defeito ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="defeitos_id3">C&Oacute;DIGO DO DEFEITO</label>
                        </div>
                    </div>
                    <div class="col" style="width: 1px; max-width:1px; height: 1px;">
                        <div class="vr" style="height: 250px;"></div>
                        <div class="h4 title-cad "></div>
                    </div>
                    <div class="col-md-2">
                        <div class="h4 title-cad ">BLOQUEIO</div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="motivo1_bloqueio" id="motivo1_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo1_bloqueio ?>" <?= $readonly ?> required />
                                <label for="validationTextarea">MOTIVO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="motivo2_bloqueio" id="motivo2_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo2_bloqueio ?>" <?= $readonly ?> required />
                                <label for="validationTextarea">MOTIVO</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" name="motivo3_bloqueio" id="motivo3_bloqueio" placeholder="Motivo" value="<?= $modelProducao->motivo3_bloqueio ?>" <?= $readonly ?> required />
                                <label for="validationTextarea">MOTIVO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="h4 title-cad "></div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd1_bloqueio" id="qtd1_bloqueio" placeholder="QTD" value="<?= $modelProducao->qtd1_bloqueio ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="validationTextarea">QTD</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd2_bloqueio" id="qtd2_bloqueio" placeholder="QTD" value="<?= $modelProducao->qtd2_bloqueio ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="validationTextarea">QTD</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="qtd3_bloqueio" id="qtd3_bloqueio" placeholder="QTD" value="<?= $modelProducao->qtd3_bloqueio ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                                <label for="validationTextarea">QTD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-1">
                            <div class="h4 title-cad "></div>
                            <div class="form-floating">
                                <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" readonly <?= $readonly ?> required />
                                <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" readonly <?= $readonly ?> required />
                                <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" readonly <?= $readonly ?> required />
                                <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="h4 title-cad "></div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <textarea class="form-control" name="acao1_bloqueio" id="acao1_bloqueio" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao1_bloqueio ?></textarea>
                                <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <textarea class="form-control" name="acao2_bloqueio" id="acao2_bloqueio" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao2_bloqueio ?></textarea>
                                <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <textarea class="form-control" name="acao3_bloqueio" id="acao3_bloqueio" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao3_bloqueio ?></textarea>
                                <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COMEÇO SCRAP DO DIA-->
                <div class="h4 title-cad ">SCRAP DO DIA</div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo1_scrap" class="form-select" id="codigo1_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo1_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo1_scrap">C&Oacute;DIGO DO PRODUTO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo2_scrap" class="form-select" id="codigo2_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo2_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo2_scrap">C&Oacute;DIGO DO PRODUTO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo3_scrap" class="form-select" id="codigo3_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo3_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo3_scrap">C&Oacute;DIGO DO PRODUTO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo4_scrap" class="form-select" id="codigo4_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo4_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo4_scrap">C&Oacute;DIGO DO PRODUTO</label>

                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo5_scrap" class="form-select" id="codigo5_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo5_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo5_scrap">C&Oacute;DIGO DO PRODUTO</label>

                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select name="codigo6_scrap" class="form-select" id="codigo6_scrap" <?= $readonly ?> required>
                                <option value="">C&Oacute;DIGO DO PRODUTO</option>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->codigo6_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->cod_produto ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="codigo6_scrap">C&Oacute;DIGO DO PRODUTO</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao1_scrap" id="descricao1_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao1_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao1_scrap">DEFEITO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao2_scrap" id="descricao2_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao2_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao2_scrap">DEFEITO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao3_scrap" id="descricao3_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao3_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao3_scrap">DEFEITO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao4_scrap" id="descricao4_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao4_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao4_scrap">DEFEITO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao5_scrap" id="descricao5_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao5_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao5_scrap">DEFEITO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="descricao6_scrap" id="descricao6_scrap" <?= $readonly ?> required>
                                <option value="">DEFEITO</option>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->descricao6_scrap) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="descricao6_scrap">DEFEITO</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd1_scrap" id="qtd1_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd1_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd2_scrap" id="qtd2_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd2_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd3_scrap" id="qtd3_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd3_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd4_scrap" id="qtd4_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd4_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd5_scrap" id="qtd5_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd5_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="qtd6_scrap" id="qtd6_scrap" placeholder="QUANTIDADE" value="<?= $modelProducao->qtd6_scrap ?>" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" <?= $readonly ?> required />
                            <label for="validationTextarea">QUANTIDADE</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" placeholder="RESPONS&Aacute;VEL" value="<?= $modelProducao->usuario_nome ?>" <?= $readonly ?> required readonly />
                            <label for="validationTextarea">RESPONS&Aacute;VEL</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo1_scrap" id="motivo1_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo1_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo2_scrap" id="motivo2_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo2_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo3_scrap" id="motivo3_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo3_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo4_scrap" id="motivo4_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo4_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo5_scrap" id="motivo5_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo5_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo6_scrap" id="motivo6_scrap" placeholder="MOTIVO" value="<?= $modelProducao->motivo6_scrap ?>" <?= $readonly ?> required />
                            <label for="validationTextarea">MOTIVO</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao1_scrap" id="acao1_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao1_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao2_scrap" id="acao2_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao2_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao3_scrap" id="acao3_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao3_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao4_scrap" id="acao4_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao4_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao5_scrap" id="acao5_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao5_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <textarea class="form-control" name="acao6_scrap" id="acao6_scrap" maxlength="200" placeholder="A&Ccedil;&Atilde;O" <?= $readonly ?> required><?= $modelProducao->acao6_scrap ?></textarea>
                            <label for="validationTextarea">A&Ccedil;&Atilde;O</label>
                        </div>
                    </div>
                </div>
                <div class="h4 title-cad ">DOWNTIME</div>
                <div class="col-md-1-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial1" id="hr_inicial1" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial1 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial1">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial2" id="hr_inicial2" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial2 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial2">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial3" id="hr_inicial3" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial3 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial3">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial4" id="hr_inicial4" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial4 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial4">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial5" id="hr_inicial5" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial5 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial5">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial6" id="hr_inicial6" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial6 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial6">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial7" id="hr_inicial7" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial7 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial7">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial8" id="hr_inicial8" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial8 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial8">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial9" id="hr_inicial9" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial9 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial9">HORA INICIAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_inicial10" id="hr_inicial10" maxlength="8" placeholder="HORA INICIAL" value="<?= $modelProducao->hr_inicial10 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial10">HORA INICIAL</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-1-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final1" id="hr_final1" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final1 ?>" <?= $readonly ?> required />
                            <label for="hr_final1">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final2" id="hr_final2" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final2 ?>" <?= $readonly ?> required />
                            <label for="hr_final2">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final3" id="hr_final3" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final3 ?>" <?= $readonly ?> required />
                            <label for="hr_final3">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final4" id="hr_final4" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final4 ?>" <?= $readonly ?> required />
                            <label for="hr_final4">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final5" id="hr_final5" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final5 ?>" <?= $readonly ?> required />
                            <label for="hr_final5">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final6" id="hr_final6" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final6 ?>" <?= $readonly ?> required />
                            <label for="hr_final6">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final7" id="hr_final7" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final7 ?>" <?= $readonly ?> required />
                            <label for="hr_final7">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final8" id="hr_final8" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final8 ?>" <?= $readonly ?> required />
                            <label for="hr_final8">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final9" id="hr_final9" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final9 ?>" <?= $readonly ?> required />
                            <label for="hr_final9">HORA FINAL</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="hr_final10" id="hr_final10" placeholder="HORA FINAL" value="<?= $modelProducao->hr_final10 ?>" <?= $readonly ?> required />
                            <label for="hr_final10">HORA FINAL</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-1-2">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado1" id="qtd_hr_parado1" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado1 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado1">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado2" id="qtd_hr_parado2" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado2 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado2">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado3" id="qtd_hr_parado3" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado3 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado3">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado4" id="qtd_hr_parado4" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado4 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado4">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado5" id="qtd_hr_parado5" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado5 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado5">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado6" id="qtd_hr_parado6" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado6 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado6">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado7" id="qtd_hr_parado7" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado7 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado7">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado8" id="qtd_hr_parado8" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado8 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado8">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado9" id="qtd_hr_parado9" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado9 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado9">TEMPO PARADO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="qtd_hr_parado10" id="qtd_hr_parado10" placeholder="TEMPO PARADO" value="<?= $modelProducao->qtd_hr_parado10 ?>" readonly <?= $readonly ?> required />
                            <label for="qtd_hr_parado10">TEMPO PARADO</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor1" id="setor1" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor1) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor1">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor2" id="setor2" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor2) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor2">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor3" id="setor3" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor3) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor3">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor4" id="setor4" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor4) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor4">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor5" id="setor5" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor5) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor5">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor6" id="setor6" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor6) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor6">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor7" id="setor7" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor7) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor7">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor8" id="setor8" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor8) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor8">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor9" id="setor9" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor9) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor9">SETOR</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="setor10" id="setor10" <?= $readonly ?> required>
                                <option value="">SETOR</option>
                                <?php foreach ($modelSetor->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->setor10) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="setor10">SETOR</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <div class="input-group mb-1">
                                <div class="form-floating">
                                    <select class="form-select md-3" name="atendente1" id="atendente1" <?= $readonly ?> required>
                                        <option value="">ATENDENTE</option>
                                        <?php foreach ($modelAtendente->rows as $item) : ?>
                                            <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente1) {
                                                                                    echo "selected";
                                                                                } ?>><?= $item->nome ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <label for="atendente1">ATENDENTE</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente2" id="atendente2" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente2) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente2">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente3" id="atendente3" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente3) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente3">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente4" id="atendente4" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente4) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente4">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente5" id="atendente5" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente5) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente5">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente6" id="atendente6" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente6) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente6">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente7" id="atendente7" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente7) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente7">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente8" id="atendente8" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente8) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente8">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente9" id="atendente9" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente9) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente9">ATENDENTE</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <select class="form-select md-3" name="atendente10" id="atendente10" <?= $readonly ?> required>
                                <option value="">ATENDENTE</option>
                                <?php foreach ($modelAtendente->rows as $item) : ?>
                                    <option value="<?= $item->id ?>" <?php if ($item->id == $modelProducao->atendente10) {
                                                                            echo "selected";
                                                                        } ?>><?= $item->nome ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="atendente10">ATENDENTE</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down1" id="motivo_down1" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down1 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial1">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down2" id="motivo_down2" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down2 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial2">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down3" id="motivo_down3" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down3 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial3">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down4" id="motivo_down4" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down4 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial4">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down5" id="motivo_down5" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down5 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial5">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down6" id="motivo_down6" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down6 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial6">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down7" id="motivo_down7" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down7 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial7">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down8" id="motivo_down8" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down8 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial8">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down9" id="motivo_down9" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down9 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial9">MOTIVO</label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="motivo_down10" id="motivo_down10" placeholder="MOTIVO" value="<?= $modelProducao->motivo_down10 ?>" <?= $readonly ?> required />
                            <label for="hr_inicial10">MOTIVO</label>
                        </div>
                    </div>
                </div>

                <!-- COMEÇO MONITOR-->
                <div class="input-size ">
                    MONITOR: <?= $modelProducao->usuario_nome ?><br>
                    TOTAL DE HORAS PARADA: <span id="total" style="height: 30px;">
                </div>
                <!-- FIM MONITOR-->
                <div class="input-size mt-2 mb-2" id="div-button">
                    <input type="submit" value="Salvar" class="btn btn-primary" <?= $disabled ?> />
                    <a class="btn btn-primary" id="" onclick="window.print()">IMPRIMIR</a>
                    <a class="btn btn-primary" onclick="tableToExcel('tableExcel', 'RELATORIO')">EXPORTAR PARA EXCEL</a>
                </div>
                <!-- FIM DO FORMULÁRIO -->
            </form>
        </div>
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
    <script src="/js/moment.js" type="text/javascript"></script>
    <script src="/js/jquery.mask.js"></script>
    <script src="/js/tableToExcel.js"></script>
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
    </script>

    <script>
        $(document).ready(function() {
            var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
            var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
            var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
            var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
            var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
            var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
            var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
            var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
            var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
            var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
            total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
            document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
            document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
            document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
            document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
        });
        $(document).ready(function() {

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

            $("#hr_inicial1").keyup(function() {
                var hr_inicial1 = document.getElementById('hr_inicial1').value;
                var hr_final1 = document.getElementById('hr_final1').value;
                const data1 = moment(hr_inicial1, "HH:mm");
                const data2 = moment(hr_final1, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado1').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final1").keyup(function() {
                var hr_inicial1 = document.getElementById('hr_inicial1').value;
                var hr_final1 = document.getElementById('hr_final1').value;

                const data1 = moment(hr_inicial1, "HH:mm");
                const data2 = moment(hr_final1, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado1').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial2").keyup(function() {

                var hr_inicial2 = document.getElementById('hr_inicial2').value;
                var hr_final2 = document.getElementById('hr_final2').value;

                const data1 = moment(hr_inicial2, "HH:mm");
                const data2 = moment(hr_final2, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado2').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final2").keyup(function() {

                var hr_inicial2 = document.getElementById('hr_inicial2').value;
                var hr_final2 = document.getElementById('hr_final2').value;

                const data1 = moment(hr_inicial2, "HH:mm");
                const data2 = moment(hr_final2, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado2').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial3").keyup(function() {

                var hr_inicial3 = document.getElementById('hr_inicial3').value;
                var hr_final3 = document.getElementById('hr_final3').value;

                const data1 = moment(hr_inicial3, "HH:mm");
                const data2 = moment(hr_final3, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado3').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final3").keyup(function() {

                var hr_inicial3 = document.getElementById('hr_inicial3').value;
                var hr_final3 = document.getElementById('hr_final3').value;

                const data1 = moment(hr_inicial3, "HH:mm");
                const data2 = moment(hr_final3, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado3').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial4").keyup(function() {

                var hr_inicial4 = document.getElementById('hr_inicial4').value;
                var hr_final4 = document.getElementById('hr_final4').value;

                const data1 = moment(hr_inicial4, "HH:mm");
                const data2 = moment(hr_final4, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado4').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final4").keyup(function() {

                var hr_inicial4 = document.getElementById('hr_inicial4').value;
                var hr_final4 = document.getElementById('hr_final4').value;

                const data1 = moment(hr_inicial4, "HH:mm");
                const data2 = moment(hr_final4, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado4').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial5").keyup(function() {

                var hr_inicial5 = document.getElementById('hr_inicial5').value;
                var hr_final5 = document.getElementById('hr_final5').value;

                const data1 = moment(hr_inicial5, "HH:mm");
                const data2 = moment(hr_final5, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado5').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final5").keyup(function() {

                var hr_inicial5 = document.getElementById('hr_inicial5').value;
                var hr_final5 = document.getElementById('hr_final5').value;

                const data1 = moment(hr_inicial5, "HH:mm");
                const data2 = moment(hr_final5, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado5').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial6").keyup(function() {

                var hr_inicial6 = document.getElementById('hr_inicial6').value;
                var hr_final6 = document.getElementById('hr_final6').value;

                const data1 = moment(hr_inicial6, "HH:mm");
                const data2 = moment(hr_final6, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado6').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final6").keyup(function() {

                var hr_inicial6 = document.getElementById('hr_inicial6').value;
                var hr_final6 = document.getElementById('hr_final6').value;

                const data1 = moment(hr_inicial6, "HH:mm");
                const data2 = moment(hr_final6, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado6').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial7").keyup(function() {

                var hr_inicial7 = document.getElementById('hr_inicial7').value;
                var hr_final7 = document.getElementById('hr_final7').value;

                const data1 = moment(hr_inicial7, "HH:mm");
                const data2 = moment(hr_final7, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado7').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final7").keyup(function() {

                var hr_inicial7 = document.getElementById('hr_inicial7').value;
                var hr_final7 = document.getElementById('hr_final7').value;

                const data1 = moment(hr_inicial7, "HH:mm");
                const data2 = moment(hr_final7, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado7').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial8").keyup(function() {

                var hr_inicial8 = document.getElementById('hr_inicial8').value;
                var hr_final8 = document.getElementById('hr_final8').value;

                const data1 = moment(hr_inicial8, "HH:mm");
                const data2 = moment(hr_final8, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado8').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final8").keyup(function() {

                var hr_inicial8 = document.getElementById('hr_inicial8').value;
                var hr_final8 = document.getElementById('hr_final8').value;

                const data1 = moment(hr_inicial8, "HH:mm");
                const data2 = moment(hr_final8, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado8').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial9").keyup(function() {

                var hr_inicial9 = document.getElementById('hr_inicial9').value;
                var hr_final9 = document.getElementById('hr_final9').value;

                const data1 = moment(hr_inicial9, "HH:mm");
                const data2 = moment(hr_final9, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado9').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final9").keyup(function() {

                var hr_inicial9 = document.getElementById('hr_inicial9').value;
                var hr_final9 = document.getElementById('hr_final9').value;

                const data1 = moment(hr_inicial9, "HH:mm");
                const data2 = moment(hr_final9, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado9').value = hora + "," + min.toFixed(0);

                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_inicial10").keyup(function() {

                var hr_inicial10 = document.getElementById('hr_inicial10').value;
                var hr_final10 = document.getElementById('hr_final10').value;

                const data1 = moment(hr_inicial10, "HH:mm");
                const data2 = moment(hr_final10, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado10').value = hora + "," + min.toFixed(0);
                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
            });
            $("#hr_final10").keyup(function() {

                var hr_inicial10 = document.getElementById('hr_inicial10').value;
                var hr_final10 = document.getElementById('hr_final10').value;

                const data1 = moment(hr_inicial10, "HH:mm");
                const data2 = moment(hr_final10, "HH:mm");

                var d = new Date(data2 - data1);
                // Mostrando:
                hora = d.getUTCHours();
                minuto = d.getUTCMinutes();
                if (hora < 10) {
                    hora = "0" + hora;
                }
                if (minuto < 10) {
                    minuto = "0" + minuto;
                }
                min = ((1 / 60 * minuto) * 100);
                document.getElementById('qtd_hr_parado10').value = hora + "," + min.toFixed(0);
                var hr1 = parseFloat(document.querySelector('#qtd_hr_parado1').value.replace(",", "."));
                var hr2 = parseFloat(document.querySelector('#qtd_hr_parado2').value.replace(",", "."));
                var hr3 = parseFloat(document.querySelector('#qtd_hr_parado3').value.replace(",", "."));
                var hr4 = parseFloat(document.querySelector('#qtd_hr_parado4').value.replace(",", "."));
                var hr5 = parseFloat(document.querySelector('#qtd_hr_parado5').value.replace(",", "."));
                var hr6 = parseFloat(document.querySelector('#qtd_hr_parado6').value.replace(",", "."));
                var hr7 = parseFloat(document.querySelector('#qtd_hr_parado7').value.replace(",", "."));
                var hr8 = parseFloat(document.querySelector('#qtd_hr_parado8').value.replace(",", "."));
                var hr9 = parseFloat(document.querySelector('#qtd_hr_parado9').value.replace(",", "."));
                var hr10 = parseFloat(document.querySelector('#qtd_hr_parado10').value.replace(",", "."));
                total = (hr1 + hr2 + hr3 + hr4 + hr5 + hr6 + hr7 + hr8 + hr9 + hr10);
                document.getElementById('total').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalInput').value = total.toFixed(2).replace(".", ",");
                document.getElementById('totalPdf').innerHTML = total.toFixed(2).replace(".", ",");
                document.getElementById('totalExcel').innerHTML = total.toFixed(2).replace(".", ",");
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
</div>
<div id="pdf">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr class="align-center ">
                    <th class="text-center">LOGO</th>
                    <th>
                        <h4 class="text-center">CONTROLE DE PRODUCAO DIARIO</h4>
                    </th>
                    <th class="text-center">LOGO</th>
                </tr>
            </tbody>
        </table>
        <div class="d-flex flex-row justify-content-around">
            <div class="col-md-2">
                <div class="input-group">
                    <span style="margin-right: 5px;">LINHA:</span>
                    <p class="text-decoration-underline"> <?= $modelProducao->linha_nome ?></p>
                </div>
                <div class="input-group">
                    <span style="margin-right: 5px;">PRODUTO:</span>
                    <p class="text-decoration-underline"><?= $modelProducao->produto_nome ?></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <div class="input-group">
                        <span style="margin-right: 5px;">TUNRO:</span>
                        <p class="text-decoration-underline"><?= $modelProducao->turno_nome ?></p>
                    </div>
                    <div class="input-group">
                        <span style="margin-right: 5px;">PROCESSO:</span>
                        <p class="text-decoration-underline"><?= $modelProducao->processo ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <span style="margin-right: 5px;">DATA:</span>
                    <p class="text-decoration-underline"><?= $modelProducao->data ?></p>
                </div>
                <div class="input-group">
                    <span style="margin-right: 5px;">O.P:</span>
                    <p class="text-decoration-underline"><?= $modelProducao->op ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div class="d-flex flex-row justify-content-between">
            <div>
                <table class="table table-bordered">
                    <thead>
                        <th>C&Oacute;DIGO</th>
                        <th>PROGRAMADO</th>
                        <th>REALIZADO</th>
                        <th>DELTA</th>
                    </thead>
                    <tbody>
                        <tr class="align-center ">
                            <td>
                                <?php foreach ($modelProduto->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->cod_produto1) {
                                        echo $item->cod_produto;
                                    } ?>
                                <?php endforeach ?>
                            </td>
                            <td><?= $modelProducao->programado1 ?></td>
                            <td><?= $modelProducao->realizado1 ?></td>
                            <td><?= $modelProducao->delta1 ?></td>
                        </tr>
                        <tr class="align-center ">
                            <td> <?php foreach ($modelProduto->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->cod_produto2) {
                                            echo $item->cod_produto;
                                        } ?>
                                <?php endforeach ?> </td>
                            <td><?= $modelProducao->programado2 ?></td>
                            <td><?= $modelProducao->realizado2 ?></td>
                            <td><?= $modelProducao->delta2 ?></td>
                        </tr>
                        <tr class="align-center ">
                            <td> <?php foreach ($modelProduto->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->cod_produto3) {
                                            echo $item->cod_produto;
                                        } ?>
                                <?php endforeach ?> </td>
                            <td><?= $modelProducao->programado3 ?></td>
                            <td><?= $modelProducao->realizado3 ?></td>
                            <td><?= $modelProducao->delta3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>QUANTIDADE</th>
                        <th>C&Oacute;DIGO DO DEFEITO</th>
                    </thead>
                    <tbody>
                        <tr class="align-center ">
                            <th>1º</th>
                            <td><?= $modelProducao->qtd_defeito1 ?></td>
                            <td>
                                <?php foreach ($modelDefeito->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->defeitos_id1) {
                                        echo $item->cod_defeito;
                                    } ?>
                                <?php endforeach ?>
                            </td>
                        </tr>
                        <tr class="align-center ">
                            <th>2º</th>
                            <td><?= $modelProducao->qtd_defeito2 ?></td>
                            <td><?php foreach ($modelDefeito->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->defeitos_id2) {
                                        echo $item->cod_defeito;
                                    } ?>
                                <?php endforeach ?></td>
                        </tr>
                        <tr class="align-center ">
                            <th>3º</th>
                            <td><?= $modelProducao->qtd_defeito3 ?></td>
                            <td><?php foreach ($modelDefeito->rows as $item) : ?>
                                    <?php if ($item->id == $modelProducao->defeitos_id3) {
                                        echo $item->cod_defeito;
                                    } ?>
                                <?php endforeach ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead id="thead">
                <tr>
                    <th colspan="6">
                        <h6>JUSTIFICATIVA</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6">
                        <p><?= $modelProducao->justificativa ?></p>
                    </td>
                </tr>
            </tbody>
            <thead id="thead">
                <tr>
                    <th colspan="6">
                        <h6>BLOQUEIO</h6>
                    </th>
                </tr>
                <th>MOTIVO</th>
                <th>QUANTIDADE</th>
                <th colspan="2">RESPONSAVEL</th>
                <th colspan="2">AÇÃO</th>
            </thead>
            <tbody>
                <tr class="align-center ">
                    <td><?= $modelProducao->motivo1_bloqueio ?></td>
                    <td><?= $modelProducao->qtd1_bloqueio ?></td>
                    <td colspan="2"><?= $modelProducao->usuario_nome ?></td>
                    <td colspan="2"><?= $modelProducao->acao1_bloqueio ?></td>
                </tr>
                <tr class="align-center ">
                    <td><?= $modelProducao->motivo2_bloqueio ?></td>
                    <td><?= $modelProducao->qtd2_bloqueio ?></td>
                    <td colspan="2"><?= $modelProducao->usuario_nome ?></td>
                    <td colspan="2"><?= $modelProducao->acao2_bloqueio ?></td>
                </tr>
                <tr class="align-center ">
                    <td><?= $modelProducao->motivo3_bloqueio ?></td>
                    <td><?= $modelProducao->qtd3_bloqueio ?></td>
                    <td colspan="2"><?= $modelProducao->usuario_nome ?></td>
                    <td colspan="2"><?= $modelProducao->acao3_bloqueio ?></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="6">
                        <h6>SCRAP DO DIA</h6>
                    </th>
                </tr>
                <th>C&Oacute;DIGO</th>
                <th>DESCRICAO</th>
                <th>QUANTIDADE</th>
                <th>RESPONSAVEL</th>
                <th>MOTIVO</th>
                <th>AÇÃO</th>
            </thead>
            <tbody>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo1_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao1_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd1_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo1_scrap ?></td>
                    <td><?= $modelProducao->acao1_scrap ?></td>
                </tr>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo2_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao2_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd2_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo2_scrap ?></td>
                    <td><?= $modelProducao->acao2_scrap ?></td>
                </tr>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo3_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao3_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd3_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo3_scrap ?></td>
                    <td><?= $modelProducao->acao3_scrap ?></td>
                </tr>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo4_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao4_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd4_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo4_scrap ?></td>
                    <td><?= $modelProducao->acao4_scrap ?></td>
                </tr>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo5_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao5_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd5_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo5_scrap ?></td>
                    <td><?= $modelProducao->acao5_scrap ?></td>
                </tr>
                <tr class="align-center ">
                    <td>
                        <?php foreach ($modelProduto->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->codigo6_scrap) {
                                echo $item->cod_produto;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php foreach ($modelDefeito->rows as $item) : ?>
                            <?php if ($item->id == $modelProducao->descricao6_scrap) {
                                echo $item->nome;
                            } ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= $modelProducao->qtd6_scrap ?></td>
                    <td><?= $modelProducao->usuario_nome ?></td>
                    <td><?= $modelProducao->motivo6_scrap ?></td>
                    <td><?= $modelProducao->acao6_scrap ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th colspan="6">
                        <h6>DOWNTIME</h6>
                    </th>
                </tr>
                <th>HORA INICIAL</th>
                <th>HORA FINAL</th>
                <th>TEMPO PARADO</th>
                <th>SETOR RESP.</th>
                <th>ATENDENTE</th>
                <th>MOTIVO</th>
            </thead>
            <tbody>
                <?php if (isset($modelProducao->hr_inicial1) || isset($modelProducao->hr_inicial2)) { ?>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial1 ?></td>
                        <td><?= $modelProducao->hr_final1 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado1 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor1) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?>
                        </td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente1) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?>
                        </td>
                        <td><?= $modelProducao->motivo_down1 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial2 ?></td>
                        <td><?= $modelProducao->hr_final2 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado2 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor2) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente2) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?>
                        </td>
                        <td><?= $modelProducao->motivo_down2 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial3 ?></td>
                        <td><?= $modelProducao->hr_final3 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado3 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor3) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente3) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?= $modelProducao->motivo_down3 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial4 ?></td>
                        <td><?= $modelProducao->hr_final4 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado4 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor4) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente4) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?= $modelProducao->motivo_down4 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial5 ?></td>
                        <td><?= $modelProducao->hr_final5 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado5 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor5) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente5) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td><?= $modelProducao->motivo_down5 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial6 ?></td>
                        <td><?= $modelProducao->hr_final6 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado6 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor6) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente6) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        </td>
                        <td><?= $modelProducao->motivo_down6 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial7 ?></td>
                        <td><?= $modelProducao->hr_final7 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado7 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor7) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente7) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        </td>
                        <td><?= $modelProducao->motivo_down7 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial8 ?></td>
                        <td><?= $modelProducao->hr_final8 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado8 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor8) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente8) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        </td>
                        <td><?= $modelProducao->motivo_down8 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial9 ?></td>
                        <td><?= $modelProducao->hr_final9 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado9 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor9) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente9) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        </td>
                        <td><?= $modelProducao->motivo_down9 ?></td>
                    </tr>
                    <tr class="align-center ">
                        <td><?= $modelProducao->hr_inicial10 ?></td>
                        <td><?= $modelProducao->hr_final10 ?></td>
                        <td><?= $modelProducao->qtd_hr_parado10 ?></td>
                        <td><?php foreach ($modelSetor->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->setor10) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        <td>
                            <?php foreach ($modelAtendente->rows as $item) : ?>
                                <?php if ($item->id == $modelProducao->atendente10) {
                                    echo $item->nome;
                                } ?>
                            <?php endforeach ?></td>
                        </td>
                        <td><?= $modelProducao->motivo_down10 ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <span> TOTAL DE HORAS PARADA: <span id="totalPdf"></span></span>
    </div>
</div>

<div id="excel">
    <table class="table table-bordered " id="tableExcel">
        <thead class="text-nowrap">
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
        <tbody class="align-middle">
            <tr>
                <td rowspan="10"><?= $modelProducao->linha_nome ?></td>
                <td rowspan="10"><?= $modelProducao->produto_nome ?></td>
                <td rowspan="10"><?= $modelProducao->turno_nome ?></td>
                <td rowspan="10"><?= $modelProducao->processo ?></td>
                <td rowspan="10"><?= $modelProducao->op ?></td>
                <td rowspan="10"><?= $modelProducao->data ?></td>
                <td>1º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->cod_produto1) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->programado1 ?></td>
                <td><?= $modelProducao->realizado1 ?></td>
                <td><?= $modelProducao->delta1 ?></td>
                <td rowspan="10"><?= $modelProducao->justificativa ?></td>
                <td>1º</td>
                <td><?= $modelProducao->qtd_defeito1 ?></td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->defeitos_id1) {
                            echo $item->cod_defeito;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>1º</td>
                <td><?= $modelProducao->motivo1_bloqueio ?></td>
                <td><?= $modelProducao->qtd1_bloqueio ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->acao1_bloqueio ?></td>
                <td>1º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo1_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao1_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd1_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo1_scrap ?></td>
                <td><?= $modelProducao->acao1_scrap ?></td>
                <td>1º</td>
                <td><?= $modelProducao->hr_inicial1 ?></td>
                <td><?= $modelProducao->hr_final1 ?></td>
                <td><?= $modelProducao->qtd_hr_parado1 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor1) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente1) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down1 ?></td>
            </tr>
            <tr>
                <td>2º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->cod_produto2) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->programado2 ?></td>
                <td><?= $modelProducao->realizado2 ?></td>
                <td><?= $modelProducao->delta2 ?></td>
                <td>2º</td>
                <td><?= $modelProducao->qtd_defeito2 ?></td>
                <td><?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->defeitos_id2) {
                            echo $item->cod_defeito;
                        } ?>
                    <?php endforeach ?></td>
                <td>2º</td>
                <td><?= $modelProducao->motivo2_bloqueio ?></td>
                <td><?= $modelProducao->qtd2_bloqueio ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->acao2_bloqueio ?></td>
                <td>2º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo2_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao2_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd2_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo2_scrap ?></td>
                <td><?= $modelProducao->acao2_scrap ?></td>
                <td>2º</td>
                <td><?= $modelProducao->hr_inicial2 ?></td>
                <td><?= $modelProducao->hr_final2 ?></td>
                <td><?= $modelProducao->qtd_hr_parado2 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor2) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente2) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down2 ?></td>
            </tr>
            <tr>
                <td>3º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->cod_produto3) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->programado3 ?></td>
                <td><?= $modelProducao->realizado3 ?></td>
                <td><?= $modelProducao->delta3 ?></td>
                <td>3º</td>
                <td><?= $modelProducao->qtd_defeito3 ?></td>
                <td><?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->defeitos_id3) {
                            echo $item->cod_defeito;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>3º</td>
                <td><?= $modelProducao->motivo3_bloqueio ?></td>
                <td><?= $modelProducao->qtd3_bloqueio ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->acao3_bloqueio ?></td>
                <td>3º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo3_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao3_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd3_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo3_scrap ?></td>
                <td><?= $modelProducao->acao3_scrap ?></td>
                <td>3º</td>
                <td><?= $modelProducao->hr_inicial3 ?></td>
                <td><?= $modelProducao->hr_final3 ?></td>
                <td><?= $modelProducao->qtd_hr_parado3 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor3) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente3) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down3 ?></td>
            </tr>
            <tr>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>
                <td rowspan="7"></td>

                <td>4º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo4_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao4_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd4_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo4_scrap ?></td>
                <td><?= $modelProducao->acao4_scrap ?></td>
                <td>4º</td>
                <td><?= $modelProducao->hr_inicial4 ?></td>
                <td><?= $modelProducao->hr_final4 ?></td>
                <td><?= $modelProducao->qtd_hr_parado4 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor4) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente4) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down4 ?></td>
            </tr>

            <tr>
                <td>5º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo5_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao5_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd5_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo5_scrap ?></td>
                <td><?= $modelProducao->acao5_scrap ?></td>
                <td>5º</td>
                <td><?= $modelProducao->hr_inicial5 ?></td>
                <td><?= $modelProducao->hr_final5 ?></td>
                <td><?= $modelProducao->qtd_hr_parado5 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor5) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente5) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down5 ?></td>
            </tr>

            <tr>
                <td>6º</td>
                <td>
                    <?php foreach ($modelProduto->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->codigo6_scrap) {
                            echo $item->cod_produto;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelDefeito->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->descricao6_scrap) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->qtd6_scrap ?></td>
                <td><?= $modelProducao->usuario_nome ?></td>
                <td><?= $modelProducao->motivo6_scrap ?></td>
                <td><?= $modelProducao->acao6_scrap ?></td>
                <td>6º</td>
                <td><?= $modelProducao->hr_inicial6 ?></td>
                <td><?= $modelProducao->hr_final6 ?></td>
                <td><?= $modelProducao->qtd_hr_parado6 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor6) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente6) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down6 ?></td>
            </tr>

            <tr>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td>7º</td>
                <td><?= $modelProducao->hr_inicial7 ?></td>
                <td><?= $modelProducao->hr_final7 ?></td>
                <td><?= $modelProducao->qtd_hr_parado7 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor7) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente7) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down7 ?></td>
            </tr>
            <tr>
                <td>8º</td>
                <td><?= $modelProducao->hr_inicial8 ?></td>
                <td><?= $modelProducao->hr_final8 ?></td>
                <td><?= $modelProducao->qtd_hr_parado8 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor8) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente8) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down8 ?></td>
            </tr>
            <tr>
                <td>9º</td>
                <td><?= $modelProducao->hr_inicial9 ?></td>
                <td><?= $modelProducao->hr_final9 ?></td>
                <td><?= $modelProducao->qtd_hr_parado9 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor9) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente9) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down9 ?></td>
            </tr>
            <tr>
                <td>10º</td>
                <td><?= $modelProducao->hr_inicial10 ?></td>
                <td><?= $modelProducao->hr_final10 ?></td>
                <td><?= $modelProducao->qtd_hr_parado10 ?></td>
                <td><?php foreach ($modelSetor->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->setor10) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td>
                    <?php foreach ($modelAtendente->rows as $item) : ?>
                        <?php if ($item->id == $modelProducao->atendente10) {
                            echo $item->nome;
                        } ?>
                    <?php endforeach ?>
                </td>
                <td><?= $modelProducao->motivo_down10 ?></td>
            </tr>
            <tr>
                <th>TOTAL</th>
                <td colspan="29"></td>
                <td><?= $modelProducao->totalhora ?></td>
                <td colspan="4"></td>
            </tr>
        </tbody>
    </table>
</div>