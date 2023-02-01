<?php

namespace controle_de_producao\DAO;

use \PDO;
use \PDOException;

class DAO
{
    protected $conexao;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=".$_ENV['db']['host'].";dbname=".$_ENV['db']['db']."";
            $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass'], $opcoes);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function returnConnection()
    {
        return $this->conexao;
    }
}
