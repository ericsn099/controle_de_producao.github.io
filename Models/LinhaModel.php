<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\LinhaDao;

class LinhaModel
{

	public $rows;
	public $id;
	public $nome;
	public $setor_id;

	//Método salvar
	public function save()
	{
		$dao = new LinhaDao();

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
		$dao = new LinhaDao();

		if ($dao->delete($id) === false) {
			return false;
		} else {
			return true;
		}
	}


	//Pegando as Linhas da tabela Linha
	public function getAllRows()
	{
		$dao = new LinhaDao();
		$this->rows = $dao->select();
	}

	public function getById(int $id)
	{
		$dao = new LinhaDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new LinhaModel();
		}
	}
}
