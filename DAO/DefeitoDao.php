<?php

namespace DAO;

use Models\DefeitoModel;
use \PDOException;
use \PDO;

class DefeitoDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(DefeitoModel $model)
	{
		$sql = "INSERT INTO defeitos(cod_defeito, nome) VALUES (?, ?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->cod_defeito);
		$stmt->bindValue(2, $model->nome);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function update(DefeitoModel $model)
	{
		$sql = "UPDATE defeitos SET cod_defeito=?, nome=? WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->cod_defeito);
		$stmt->bindValue(2, $model->nome);
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


	public function select()
	{
		$sql = "SELECT * FROM defeitos ORDER BY nome";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
	public function delete(int $id)
	{
		$sql = "DELETE FROM defeitos WHERE id=?;";
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
	public function selectById(int $id)
	{
		$sql = "SELECT * FROM defeitos WHERE defeitos.id = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("Models\DefeitoModel");
	}
}
