<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\SetorModel;
use controle_de_producao\Conn\Conn;
use \PDOException;
use \PDO;

class SetorDao
{
	private $conexao;

	//construtor da classe
	public function __construct()
	{
		$conn = new Conn();
		$this->conexao = $conn->returnConnection();
	}

	public function insert(SetorModel $model)
	{
		$sql = "INSERT INTO setores(nome) VALUES (?);";
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

	public function update(SetorModel $model)
	{
		$sql = "UPDATE setores SET nome=? WHERE id=?;";
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
		$sql = "DELETE FROM setores WHERE id=?;";

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

		$sql = "SELECT * FROM setores ORDER BY nome";

		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id)
	{
		$sql = "SELECT * FROM setores WHERE setores.id = ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("controle_de_producao\Models\SetorModel");
	}
}
