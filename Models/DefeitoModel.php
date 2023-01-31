<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\DefeitoDao;

class DefeitoModel
{

	public $rows;
	public $id;
	public $cod_defeito;
	public $nome;

	//Método salvar
	public function save()
	{
		$dao = new DefeitoDao();

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


	//Pegando as Defeitos da tabela Defeito
	public function getAllRows()
	{
		$dao = new DefeitoDao();
		$this->rows = $dao->select();
	}
	public function delete(int $id)
	{
		$dao = new DefeitoDao();

		if ($dao->delete($id) === false) {
			return false;
		} else {
			return true;
		}
	}
	public function getById(int $id)
	{
		$dao = new DefeitoDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new DefeitoModel();
		}
	}
}
