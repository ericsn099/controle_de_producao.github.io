<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\AtendenteDao;

class AtendenteModel
{

	public $rows;
	public $id;
	public $nome;

	//Método salvar
	public function save()
	{
		$dao = new AtendenteDao();

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


	//Pegando as Atendentes da tabela Atendente
	public function getAllRows()
	{
		$dao = new AtendenteDao();
		$this->rows = $dao->select();
	}

	public function delete(int $id)
	{
		$dao = new AtendenteDao();

		if ($dao->delete($id) === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getById(int $id)
	{
		$dao = new AtendenteDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new AtendenteModel();
		}
	}
}
