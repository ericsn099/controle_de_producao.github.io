<?php foreach ($modelProducao->rows as $item2) : ?>
    <tr>
        <td rowspan="10"><?= $item2->data ?></td>
        <td rowspan="10"><?= $item2->nome_linha ?></td>
        <td rowspan="10"><?= $item2->produto_nome ?></td>
        <td rowspan="10"><?= $item2->turno_nome ?></td>
        <td rowspan="10"><?= $item2->processo ?></td>
        <td rowspan="10"><?= $item2->op ?></td>
        <td>1º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->cod_produto1) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->programado1 ?></td>
        <td><?= $item2->realizado1 ?></td>
        <td><?= $item2->delta1 ?></td>
        <td rowspan="10"><?= $item2->justificativa ?></td>
        <td>1º</td>
        <td><?= $item2->qtd_defeito1 ?></td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->defeitos_id1) {
                    echo $item->cod_defeito;
                } ?>
            <?php endforeach ?>
        </td>
        <td>1º</td>
        <td><?= $item2->motivo1_bloqueio ?></td>
        <td><?= $item2->qtd1_bloqueio ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->acao1_bloqueio ?></td>
        <td>1º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->codigo1_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao1_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd1_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo1_scrap ?></td>
        <td><?= $item2->acao1_scrap ?></td>
        <td>1º</td>
        <td><?= $item2->hr_inicial1 ?></td>
        <td><?= $item2->hr_final1 ?></td>
        <td><?= $item2->qtd_hr_parado1 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor1) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente1) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down1 ?></td>
    </tr>
    <tr>
        <td>2º</td>
        <td><?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->cod_produto2) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->programado2 ?></td>
        <td><?= $item2->realizado2 ?></td>
        <td><?= $item2->delta2 ?></td>
        <td>2º</td>
        <td><?= $item2->qtd_defeito2 ?></td>
        <td><?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->defeitos_id2) {
                    echo $item->cod_defeito;
                } ?>
            <?php endforeach ?></td>
        <td>2º</td>
        <td><?= $item2->motivo2_bloqueio ?></td>
        <td><?= $item2->qtd2_bloqueio ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->acao2_bloqueio ?></td>
        <td>2º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->codigo2_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao2_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd2_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo2_scrap ?></td>
        <td><?= $item2->acao2_scrap ?></td>
        <td>2º</td>
        <td><?= $item2->hr_inicial2 ?></td>
        <td><?= $item2->hr_final2 ?></td>
        <td><?= $item2->qtd_hr_parado2 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor2) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente2) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down2 ?></td>
    </tr>
    <tr>
        <td>3º</td>
        <td><?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->cod_produto3) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->programado3 ?></td>
        <td><?= $item2->realizado3 ?></td>
        <td><?= $item2->delta3 ?></td>
        <td>3º</td>
        <td><?= $item2->qtd_defeito3 ?></td>
        <td><?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->defeitos_id3) {
                    echo $item->cod_defeito;
                } ?>
            <?php endforeach ?>
        </td>
        <td>3º</td>
        <td><?= $item2->motivo3_bloqueio ?></td>
        <td><?= $item2->qtd3_bloqueio ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->acao3_bloqueio ?></td>
        <td>3º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->codigo3_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao3_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd3_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo3_scrap ?></td>
        <td><?= $item2->acao3_scrap ?></td>
        <td>3º</td>
        <td><?= $item2->hr_inicial3 ?></td>
        <td><?= $item2->hr_final3 ?></td>
        <td><?= $item2->qtd_hr_parado3 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor3) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente3) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down3 ?></td>
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
                <?php if ($item->id == $item2->codigo4_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao4_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd4_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo4_scrap ?></td>
        <td><?= $item2->acao4_scrap ?></td>
        <td>4º</td>
        <td><?= $item2->hr_inicial4 ?></td>
        <td><?= $item2->hr_final4 ?></td>
        <td><?= $item2->qtd_hr_parado4 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor4) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente4) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down4 ?></td>
    </tr>

    <tr>
        <td>5º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->codigo5_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao5_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd5_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo5_scrap ?></td>
        <td><?= $item2->acao5_scrap ?></td>
        <td>5º</td>
        <td><?= $item2->hr_inicial5 ?></td>
        <td><?= $item2->hr_final5 ?></td>
        <td><?= $item2->qtd_hr_parado5 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor5) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente5) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down5 ?></td>
    </tr>
    <tr>
        <td>6º</td>
        <td>
            <?php foreach ($modelProduto->rows as $item) : ?>
                <?php if ($item->id == $item2->codigo6_scrap) {
                    echo $item->cod_produto;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelDefeito->rows as $item) : ?>
                <?php if ($item->id == $item2->descricao6_scrap) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->qtd6_scrap ?></td>
        <td><?= $item2->usuario_nome ?></td>
        <td><?= $item2->motivo6_scrap ?></td>
        <td><?= $item2->acao6_scrap ?></td>
        <td>6º</td>
        <td><?= $item2->hr_inicial6 ?></td>
        <td><?= $item2->hr_final6 ?></td>
        <td><?= $item2->qtd_hr_parado6 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor6) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente6) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down6 ?></td>
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
        <td><?= $item2->hr_inicial7 ?></td>
        <td><?= $item2->hr_final7 ?></td>
        <td><?= $item2->qtd_hr_parado7 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor7) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente7) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down7 ?></td>
    </tr>
    <tr>
        <td>8º</td>
        <td><?= $item2->hr_inicial8 ?></td>
        <td><?= $item2->hr_final8 ?></td>
        <td><?= $item2->qtd_hr_parado8 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor8) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente8) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down8 ?></td>
    </tr>
    <tr>
        <td>9º</td>
        <td><?= $item2->hr_inicial9 ?></td>
        <td><?= $item2->hr_final9 ?></td>
        <td><?= $item2->qtd_hr_parado9 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor9) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente9) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down9 ?></td>
    </tr>
    <tr>
        <td>10º</td>
        <td><?= $item2->hr_inicial10 ?></td>
        <td><?= $item2->hr_final10 ?></td>
        <td><?= $item2->qtd_hr_parado10 ?></td>
        <td><?php foreach ($modelSetor->rows as $item) : ?>
                <?php if ($item->id == $item2->setor10) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td>
            <?php foreach ($modelAtendente->rows as $item) : ?>
                <?php if ($item->id == $item2->atendente10) {
                    echo $item->nome;
                } ?>
            <?php endforeach ?>
        </td>
        <td><?= $item2->motivo_down10 ?></td>
    </tr>
    <tr>
        <th>TOTAL</th>
        <td colspan="29"></td>
        <td><?= $item2->totalhora ?></td>
        <td colspan="4"></td>
    </tr>

<?php endforeach ?>