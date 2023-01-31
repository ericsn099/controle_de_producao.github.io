<?php

use controle_de_producao\Controllers\AtendenteController;
use controle_de_producao\Controllers\DefeitoController;
use controle_de_producao\Controllers\HomeController;
use controle_de_producao\Controllers\LoginController;
use controle_de_producao\Controllers\LinhaController;
use controle_de_producao\Controllers\SetorController;
use controle_de_producao\Controllers\ProducaoController;
use controle_de_producao\Controllers\ProdutoController;

// Pegando a url digita.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {

    case '/':
        HomeController::index();
        break;

    case '/login':
        LoginController::index();
        break;

    case '/linha':
        LinhaController::index();
        break;

    case '/linhas/save':
        LinhaController::save();
        break;

    case '/login/validarLogin':
        LoginController::validarLogin();
        break;

    case '/informativo-de-producao':
        ProducaoController::index();
        break;

    case '/informativos':
        ProducaoController::informativos();
        break;

    case '/ajax':
        ProducaoController::ajax();
        break;

    case '/ajax-excel':
        ProducaoController::ajaxExcel();
        break;

    case '/produtos':
        ProdutoController::index();
        break;

    case '/ver-produtos':
        ProdutoController::ver_produtos();
        break;

    case '/defeitos':
        DefeitoController::index();
        break;

    case '/ver-defeitos':
        DefeitoController::ver_defeitos();
        break;

    case '/linhas':
        LinhaController::index();
        break;

    case '/linhas/delete':
        LinhaController::delete();
        break;

    case '/atendentes/delete':
        AtendenteController::delete();
        break;
    case '/defeitos/delete':
        DefeitoController::delete();
        break;
    case '/produtos/delete':
        ProdutoController::delete();
        break;
    case '/setores/delete':
        SetorController::delete();
        break;

    case '/ver-linhas':
        LinhaController::ver_linhas();
        break;

    case '/setores':
        SetorController::index();
        break;

    case '/ver-setores':
        SetorController::ver_setores();
        break;

    case '/atendentes':
        AtendenteController::index();
        break;

    case '/ver-atendentes':
        AtendenteController::ver_atendentes();
        break;

    case '/informativo-de-producao/save':
        ProducaoController::save();
        break;

    case '/produtos/save':
        ProdutoController::save();
        break;

    case '/defeitos/save':
        DefeitoController::save();
        break;

    case '/setores/save':
        SetorController::save();
        break;
    case '/atendentes/save':
        AtendenteController::save();
        break;

    case '/login/save':
        LoginController::save();
        break;

    case '/cadastro':
        LoginController::cadastroView();
        break;

    default:
        include "Views/Error404/error404.php";
}
