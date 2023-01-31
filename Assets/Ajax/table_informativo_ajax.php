<?php foreach ($modelProducao->rows as $item) : ?>
    <tr>
        <td><?= $item->nome_linha ?></td>
        <td><?= $item->data ?></td>
        <td><?= $item->usuario_nome ?></td>
        <td><a href="/informativo-de-producao?id=<?= $item->id ?>" class="link-primary">ATUALIZAR</a></td>
    </tr>
<?php endforeach ?>
