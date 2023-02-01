<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\LinhaModel;
use \PDOException;
use \PDO;

class LinhaDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(LinhaModel $model)
	{
		$sql = "INSERT INTO linhas(nome,setor_id) VALUES (?,?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->setor_id);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function update(LinhaModel $model)
	{
		$sql = "UPDATE linhas SET nome=?, setor_id=? WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->setor_id);
		$stmt->bindValue(3, $model->id);

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
		$sql = "DELETE FROM linhas WHERE id=?;";
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
		$sql = "SELECT * FROM linhas ORDER BY nome";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id)
	{
		$sql = "SELECT * FROM linhas WHERE linhas.id = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("controle_de_producao\Models\LinhaModel");
	}
}
