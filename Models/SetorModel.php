<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\SetorDao;

class SetorModel
{
	public $rows;
	public $id;
	public $nome;

	//Método salvar
	public function save()
	{
		$dao = new SetorDao();

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
		$dao = new SetorDao();

		if ($dao->delete($id) === false) {
			return false;
		} else {
			return true;
		}
	}

	//Pegando as Setors da tabela Setor
	public function getAllRows()
	{
		$dao = new SetorDao();
		$this->rows = $dao->select();
	}

	public function getById(int $id)
	{
		$dao = new SetorDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new SetorModel();
		}
	}
}
