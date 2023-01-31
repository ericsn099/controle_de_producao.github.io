<?php

namespace controle_de_producao\Models;

use controle_de_producao\DAO\ProducaoDao;

class ProducaoModel
{
	public $rows;
	public $id;
	public $op;
	public $processo;
	public $justificativa;
	public $data;
	public $programado1;
	public $realizado1;
	public $delta1;
	public $programado2;
	public $realizado2;
	public $delta2;
	public $programado3;
	public $realizado3;
	public $delta3;
	public $qtd_defeito1;
	public $qtd_defeito2;
	public $qtd_defeito3;
	public $defeitos_id1;
	public $defeitos_id2;
	public $defeitos_id3;
	public $linhas_id;
	public $nome_linha;
	public $produtos_id;
	public $turnos_id;
	public $cod_produto1;
	public $cod_produto2;
	public $cod_produto3;
	public $motivo1_bloqueio;
	public $motivo2_bloqueio;
	public $motivo3_bloqueio;
	public $qtd1_bloqueio;
	public $qtd2_bloqueio;
	public $qtd3_bloqueio;
	public $acao1_bloqueio;
	public $acao2_bloqueio;
	public $acao3_bloqueio;
	public $codigo1_scrap;
	public $codigo2_scrap;
	public $codigo3_scrap;
	public $codigo4_scrap;
	public $codigo5_scrap;
	public $codigo6_scrap;
	public $descricao1_scrap;
	public $descricao2_scrap;
	public $descricao3_scrap;
	public $descricao4_scrap;
	public $descricao5_scrap;
	public $descricao6_scrap;
	public $qtd1_scrap;
	public $qtd2_scrap;
	public $qtd3_scrap;
	public $qtd4_scrap;
	public $qtd5_scrap;
	public $qtd6_scrap;
	public $motivo1_scrap;
	public $motivo2_scrap;
	public $motivo3_scrap;
	public $motivo4_scrap;
	public $motivo5_scrap;
	public $motivo6_scrap;
	public $acao1_scrap;
	public $acao2_scrap;
	public $acao3_scrap;
	public $acao4_scrap;
	public $acao5_scrap;
	public $acao6_scrap;
	public $hr_inicial1;
	public $hr_final1;
	public $setor1;
	public $motivo_down1;
	public $hr_inicial2;
	public $hr_final2;
	public $setor2;
	public $motivo_down2;
	public $hr_inicial3;
	public $hr_final3;
	public $setor3;
	public $motivo_down3;
	public $hr_inicial4;
	public $hr_final4;
	public $setor4;
	public $motivo_down4;
	public $hr_inicial5;
	public $hr_final5;
	public $setor5;
	public $motivo_down5;
	public $hr_inicial6;
	public $hr_final6;
	public $setor6;
	public $motivo_down6;
	public $hr_inicial7;
	public $hr_final7;
	public $setor7;
	public $motivo_down7;
	public $hr_inicial8;
	public $hr_final8;
	public $setor8;
	public $motivo_down8;
	public $hr_inicial9;
	public $hr_final9;
	public $setor9;
	public $motivo_down9;
	public $hr_inicial10;
	public $hr_final10;
	public $setor10;
	public $motivo_down10;
	public $qtd_hr_parado1;
	public $qtd_hr_parado2;
	public $qtd_hr_parado3;
	public $qtd_hr_parado4;
	public $qtd_hr_parado5;
	public $qtd_hr_parado6;
	public $qtd_hr_parado7;
	public $qtd_hr_parado8;
	public $qtd_hr_parado9;
	public $qtd_hr_parado10;
	public $atendente1;
	public $atendente2;
	public $atendente3;
	public $atendente4;
	public $atendente5;
	public $atendente6;
	public $atendente7;
	public $atendente8;
	public $atendente9;
	public $atendente10;
	public $linha_nome;
	public $produto_nome;
	public $turno_nome;
	public $usuario_id;
	public $usuario_nome;
	public $usuario_login;
	public $totalhora;
	//Método salvar
	public function save()
	{
		$dao = new ProducaoDao();

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


	//Pegando as Producaos da tabela Producao
	public function getAllRows()
	{
		$dao = new ProducaoDao();

		$this->rows = $dao->select();
	}

	public function getLoginRows(string $data)
	{
		$dao = new ProducaoDao();

		$obj = $this->rows = $dao->selectByLoginInformativo($data);
		if ($obj) {
			return $obj;
		} else {
			return false;
		}
	}

	public function getById(int $id)
	{
		$dao = new ProducaoDao();

		$obj = $dao->selectById($id);

		if ($obj) {
			return $obj;
		} else {
			return new ProducaoModel();
		}
	}
}
