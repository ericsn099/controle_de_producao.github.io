<?php

namespace Models;

use DAO\ProdutoDao;

class ProdutoModel
{
	public $rows;
	public $id;
	public $cod_produto;
	public $nome;

	//Método salvar
	public function save()
	{
		$dao = new ProdutoDao();

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

	public function delete(int $id)
	{
		$dao = new ProdutoDao();

		if ($dao->delete($id) === false) {
			return false;
		} else {
			return true;
		}
	}
	//Pegando as Produtos da tabela Produto
	public function getAllRows()
	{
		$dao = new ProdutoDao();
		$this->rows = $dao->select();
	}

	public function getById(int $id)
	{
		$dao = new ProdutoDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new ProdutoModel();
		}
	}
}
