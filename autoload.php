<?php
spl_autoload_register(function ($nome_da_classe) {
   
    $classe_controller = "../" . $nome_da_classe . ".php";
    $classe_model = "../" . $nome_da_classe . ".php";
    $classe_dao = "../" . $nome_da_classe . ".php";
    if (file_exists($classe_controller)) {
        include $classe_controller;
    } else if (file_exists($classe_model)) {
        include $classe_model;
    } else if (file_exists($classe_dao)) {
        include $classe_dao;
    }
});
