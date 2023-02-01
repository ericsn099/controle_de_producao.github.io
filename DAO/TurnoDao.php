<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\TurnoModel;
use \PDOException;
use \PDO;

class TurnoDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(TurnoModel $model)
	{
		$sql = "INSERT INTO turnos(nome) VALUES (?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $this->$model->nome);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}


	public function select()
	{
		$sql = "SELECT * FROM turnos ORDER BY nome";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
}
