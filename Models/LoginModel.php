<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\LoginDao;

class LoginModel
{
    public $rows;
    public $id;
    public $senha;
    public $login;
    public $nome;
    //validar login
    public function validarLogin(string $login, string $senha)
    {
        $dao = new LoginDao();

        $obj = $dao->validarUsuario($login, $senha);
        if ($obj) {
            return $obj;
        } else {
            return false;
        }
    }

    public function save()
    {
        $dao = new LoginDao();

        if (empty($this->id)) {
            if ($dao->insert($this) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            if ($dao->update($this) === false) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function getByLogin(string $login)
    {
        $dao = new LoginDao();

        $obj = $dao->selectByLogin($login);
        if ($obj) {
            return $obj;
        }
    }

    public function getAllRows()
    {
        $dao = new LoginDao();
        $this->rows = $dao->selectAll();
    }
}
