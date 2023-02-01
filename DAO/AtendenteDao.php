<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\AtendenteModel;
use \PDOException;
use \PDO;

class AtendenteDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(AtendenteModel $model)
	{
		$sql = "INSERT INTO atendentes(nome) VALUES (?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function update(AtendenteModel $model)
	{
		$sql = "UPDATE atendentes SET nome=? WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->id);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}
	public function delete(int $id)
	{
		$sql = "DELETE FROM atendentes WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);

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
		$sql = "SELECT * FROM atendentes ORDER BY nome";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id)
	{
		$sql = "SELECT * FROM atendentes WHERE atendentes.id = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("controle_de_producao\Models\AtendenteModel");
	}
}
