<?php
spl_autoload_register(function ($nome_da_classe) {
   
    $arquivo = BASEDIR . $nome_da_classe . '.php';
    
    if (file_exists($arquivo)) {
        include $arquivo;
    } else if (file_exists($classe_model)) {
        exit("ARQUIVO NÃO ENCONTRADO: ".$arquivo);
    }
    
});
