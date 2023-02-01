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
            $dsn = "mysql:host=localhost:3306;dbname=controle_producao2";
            $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->conexao = new PDO($dsn, 'root', '19019407eric@', $opcoes);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function returnConnection()
    {
        return $this->conexao;
    }
}
