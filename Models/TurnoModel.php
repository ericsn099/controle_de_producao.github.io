<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\TurnoDao;

class TurnoModel
{
	public $rows;

	//Método salvar
	public function save()
	{
		$dao = new TurnoDao();

		if ($dao->insert($this) === false) {
			return false;
		} else {
			return true;
		}
	}

	//Pegando as Turnos da tabela Turno
	public function getAllRows()
	{
		$dao = new TurnoDao();
		$this->rows = $dao->select();
	}
}
