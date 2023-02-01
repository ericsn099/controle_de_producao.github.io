<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\ProdutoModel;
use \PDOException;
use \PDO;

class ProdutoDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(ProdutoModel $model)
	{
		$sql = "INSERT INTO produtos(cod_produto, nome) VALUES (?, ?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->cod_produto);
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
	public function update(ProdutoModel $model)
	{
		$sql = "UPDATE produtos SET cod_produto=?, nome=? WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->cod_produto);
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

	public function delete(int $id)
	{
		$sql = "DELETE FROM produtos WHERE id=?;";
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
		$sql = "SELECT * FROM produtos ORDER BY nome";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id)
	{
		$sql = "SELECT * FROM produtos WHERE produtos.id = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("controle_de_producao\Models\ProdutoModel");
	}
}
