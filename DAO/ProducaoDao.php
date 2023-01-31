<?php

namespace controle_de_producao\DAO;

use controle_de_producao\Models\ProducaoModel;
use controle_de_producao\Conn\Conn;
use \PDOException;
use \PDO;

class ProducaoDao
{
	private $conexao;

	//construtor da classe
	public function __construct()
	{
		$conn = new Conn();
		$this->conexao = $conn->returnConnection();
	}

	public function insert(ProducaoModel $model)
	{
		$sql = "INSERT INTO informativo(op,
		processo,
		justificativa,
		data,
		programado1,
		programado2,
		programado3,
		realizado1,
		realizado2,
		realizado3,
		delta1,
		delta2,
		delta3,
		qtd_defeito1,
		qtd_defeito2,
		qtd_defeito3,
		defeitos_id1,
		defeitos_id2,
		defeitos_id3,
		linhas_id,
		produtos_id,
		turnos_id,
		cod_produto1,
		cod_produto2,
		cod_produto3,
		motivo1_bloqueio,
		motivo2_bloqueio,
		motivo3_bloqueio,
		qtd1_bloqueio,
		qtd2_bloqueio,
		qtd3_bloqueio,
		acao1_bloqueio,
		acao2_bloqueio,
		acao3_bloqueio,
		codigo1_scrap,
		codigo2_scrap,
		codigo3_scrap,
		codigo4_scrap,
		codigo5_scrap,
		codigo6_scrap,
		descricao1_scrap,
		descricao2_scrap,
		descricao3_scrap,
		descricao4_scrap,
		descricao5_scrap,
		descricao6_scrap,
		qtd1_scrap,
		qtd2_scrap,
		qtd3_scrap,
		qtd4_scrap,
		qtd5_scrap,
		qtd6_scrap,
		motivo1_scrap,
		motivo2_scrap,
		motivo3_scrap,
		motivo4_scrap,
		motivo5_scrap,
		motivo6_scrap,
		acao1_scrap,
		acao2_scrap,
		acao3_scrap,
		acao4_scrap,
		acao5_scrap,
		acao6_scrap,
		hr_inicial1,
		hr_inicial2,
		hr_inicial3,
		hr_inicial4,
		hr_inicial5,
		hr_inicial6,
		hr_inicial7,
		hr_inicial8,
		hr_inicial9,
		hr_inicial10,
		hr_final1,
		hr_final2,
		hr_final3,
		hr_final4,
		hr_final5,
		hr_final6,
		hr_final7,
		hr_final8,
		hr_final9,
		hr_final10,
		setor1,
		setor2,
		setor3,
		setor4,
		setor5,
		setor6,
		setor7,
		setor8,
		setor9,
		setor10,
		motivo_down1,
		motivo_down2,
		motivo_down3,
		motivo_down4,
		motivo_down5,
		motivo_down6,
		motivo_down7,
		motivo_down8,
		motivo_down9,
		motivo_down10,
		atendente1,
		atendente2,
		atendente3,
		atendente4,
		atendente5,
		atendente6,
		atendente7,
		atendente8,
		atendente9,
		atendente10,
		qtd_hr_parado1,
		qtd_hr_parado2,
		qtd_hr_parado3,
		qtd_hr_parado4,
		qtd_hr_parado5,
		qtd_hr_parado6,
		qtd_hr_parado7,
		qtd_hr_parado8,
		qtd_hr_parado9,
		qtd_hr_parado10,
		totalhora,
		usuario_id) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->op);
		$stmt->bindValue(2, $model->processo);
		$stmt->bindValue(3, $model->justificativa);
		$stmt->bindValue(4, $model->data);
		$stmt->bindValue(5, $model->programado1);
		$stmt->bindValue(6, $model->programado2);
		$stmt->bindValue(7, $model->programado3);
		$stmt->bindValue(8, $model->realizado1);
		$stmt->bindValue(9, $model->realizado2);
		$stmt->bindValue(10, $model->realizado3);
		$stmt->bindValue(11, $model->delta1);
		$stmt->bindValue(12, $model->delta2);
		$stmt->bindValue(13, $model->delta3);
		$stmt->bindValue(14, $model->qtd_defeito1);
		$stmt->bindValue(15, $model->qtd_defeito2);
		$stmt->bindValue(16, $model->qtd_defeito3);
		$stmt->bindValue(17, $model->defeitos_id1);
		$stmt->bindValue(18, $model->defeitos_id2);
		$stmt->bindValue(19, $model->defeitos_id3);
		$stmt->bindValue(20, $model->linhas_id);
		$stmt->bindValue(21, $model->produtos_id);
		$stmt->bindValue(22, $model->turnos_id);
		$stmt->bindValue(23, $model->cod_produto1);
		$stmt->bindValue(24, $model->cod_produto2);
		$stmt->bindValue(25, $model->cod_produto3);
		$stmt->bindValue(26, $model->motivo1_bloqueio);
		$stmt->bindValue(27, $model->motivo2_bloqueio);
		$stmt->bindValue(28, $model->motivo3_bloqueio);
		$stmt->bindValue(29, $model->qtd1_bloqueio);
		$stmt->bindValue(30, $model->qtd2_bloqueio);
		$stmt->bindValue(31, $model->qtd3_bloqueio);
		$stmt->bindValue(32, $model->acao1_bloqueio);
		$stmt->bindValue(33, $model->acao2_bloqueio);
		$stmt->bindValue(34, $model->acao3_bloqueio);
		$stmt->bindValue(35, $model->codigo1_scrap);
		$stmt->bindValue(36, $model->codigo2_scrap);
		$stmt->bindValue(37, $model->codigo3_scrap);
		$stmt->bindValue(38, $model->codigo4_scrap);
		$stmt->bindValue(39, $model->codigo5_scrap);
		$stmt->bindValue(40, $model->codigo6_scrap);
		$stmt->bindValue(41, $model->descricao1_scrap);
		$stmt->bindValue(42, $model->descricao2_scrap);
		$stmt->bindValue(43, $model->descricao3_scrap);
		$stmt->bindValue(44, $model->descricao4_scrap);
		$stmt->bindValue(45, $model->descricao5_scrap);
		$stmt->bindValue(46, $model->descricao6_scrap);
		$stmt->bindValue(47, $model->qtd1_scrap);
		$stmt->bindValue(48, $model->qtd2_scrap);
		$stmt->bindValue(49, $model->qtd3_scrap);
		$stmt->bindValue(50, $model->qtd4_scrap);
		$stmt->bindValue(51, $model->qtd5_scrap);
		$stmt->bindValue(52, $model->qtd6_scrap);
		$stmt->bindValue(53, $model->motivo1_scrap);
		$stmt->bindValue(54, $model->motivo2_scrap);
		$stmt->bindValue(55, $model->motivo3_scrap);
		$stmt->bindValue(56, $model->motivo4_scrap);
		$stmt->bindValue(57, $model->motivo5_scrap);
		$stmt->bindValue(58, $model->motivo6_scrap);
		$stmt->bindValue(59, $model->acao1_scrap);
		$stmt->bindValue(60, $model->acao2_scrap);
		$stmt->bindValue(61, $model->acao3_scrap);
		$stmt->bindValue(62, $model->acao4_scrap);
		$stmt->bindValue(63, $model->acao5_scrap);
		$stmt->bindValue(64, $model->acao6_scrap);
		$stmt->bindValue(65, $model->hr_inicial1);
		$stmt->bindValue(66, $model->hr_inicial2);
		$stmt->bindValue(67, $model->hr_inicial3);
		$stmt->bindValue(68, $model->hr_inicial4);
		$stmt->bindValue(69, $model->hr_inicial5);
		$stmt->bindValue(70, $model->hr_inicial6);
		$stmt->bindValue(71, $model->hr_inicial7);
		$stmt->bindValue(72, $model->hr_inicial8);
		$stmt->bindValue(73, $model->hr_inicial9);
		$stmt->bindValue(74, $model->hr_inicial10);
		$stmt->bindValue(75, $model->hr_final1);
		$stmt->bindValue(76, $model->hr_final2);
		$stmt->bindValue(77, $model->hr_final3);
		$stmt->bindValue(78, $model->hr_final4);
		$stmt->bindValue(79, $model->hr_final5);
		$stmt->bindValue(80, $model->hr_final6);
		$stmt->bindValue(81, $model->hr_final7);
		$stmt->bindValue(82, $model->hr_final8);
		$stmt->bindValue(83, $model->hr_final9);
		$stmt->bindValue(84, $model->hr_final10);
		$stmt->bindValue(85, $model->setor1);
		$stmt->bindValue(86, $model->setor2);
		$stmt->bindValue(87, $model->setor3);
		$stmt->bindValue(88, $model->setor4);
		$stmt->bindValue(89, $model->setor5);
		$stmt->bindValue(90, $model->setor6);
		$stmt->bindValue(91, $model->setor7);
		$stmt->bindValue(92, $model->setor8);
		$stmt->bindValue(93, $model->setor9);
		$stmt->bindValue(94, $model->setor10);
		$stmt->bindValue(95, $model->motivo_down1);
		$stmt->bindValue(96, $model->motivo_down2);
		$stmt->bindValue(97, $model->motivo_down3);
		$stmt->bindValue(98, $model->motivo_down4);
		$stmt->bindValue(99, $model->motivo_down5);
		$stmt->bindValue(100, $model->motivo_down6);
		$stmt->bindValue(101, $model->motivo_down7);
		$stmt->bindValue(102, $model->motivo_down8);
		$stmt->bindValue(103, $model->motivo_down9);
		$stmt->bindValue(104, $model->motivo_down10);
		$stmt->bindValue(105, $model->atendente1);
		$stmt->bindValue(106, $model->atendente2);
		$stmt->bindValue(107, $model->atendente3);
		$stmt->bindValue(108, $model->atendente4);
		$stmt->bindValue(109, $model->atendente5);
		$stmt->bindValue(110, $model->atendente6);
		$stmt->bindValue(111, $model->atendente7);
		$stmt->bindValue(112, $model->atendente8);
		$stmt->bindValue(113, $model->atendente9);
		$stmt->bindValue(114, $model->atendente10);
		$stmt->bindValue(115, $model->qtd_hr_parado1);
		$stmt->bindValue(116, $model->qtd_hr_parado2);
		$stmt->bindValue(117, $model->qtd_hr_parado3);
		$stmt->bindValue(118, $model->qtd_hr_parado4);
		$stmt->bindValue(119, $model->qtd_hr_parado5);
		$stmt->bindValue(120, $model->qtd_hr_parado6);
		$stmt->bindValue(121, $model->qtd_hr_parado7);
		$stmt->bindValue(122, $model->qtd_hr_parado8);
		$stmt->bindValue(123, $model->qtd_hr_parado9);
		$stmt->bindValue(124, $model->qtd_hr_parado10);
		$stmt->bindValue(125, $model->totalhora);
		$stmt->bindValue(126, $model->usuario_id);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			echo $e;
			exit;

			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function update(ProducaoModel $model)
	{
		$sql = "UPDATE
		informativo
	  	SET
		op = ?,
		processo = ?,
		justificativa = ?,
		data = ?,
		programado1 = ?,
		realizado1 = ?,
		delta1 = ?,
		programado2 = ?,
		realizado2 = ?,
		delta2 = ?,
		programado3 = ?,
		realizado3 = ?,
		delta3 = ?,
		qtd_defeito1 = ?,
		qtd_defeito2 = ?,
		qtd_defeito3 = ?,
		defeitos_id1 = ?,
		defeitos_id2 = ?,
		defeitos_id3 = ?,
		linhas_id = ?,
		produtos_id = ?,
		turnos_id = ?,
		cod_produto1 = ?,
		cod_produto2 = ?,
		cod_produto3 = ?,
		motivo1_bloqueio = ?,
		motivo2_bloqueio = ?,
		motivo3_bloqueio = ?,
		qtd1_bloqueio = ?,
		qtd2_bloqueio = ?,
		qtd3_bloqueio = ?,
		acao1_bloqueio = ?,
		acao2_bloqueio = ?,
		acao3_bloqueio = ?,
		codigo1_scrap = ?,
		codigo2_scrap = ?,
		codigo3_scrap = ?,
		codigo4_scrap = ?,
		codigo5_scrap = ?,
		codigo6_scrap = ?,
		descricao1_scrap = ?,
		descricao2_scrap = ?,
		descricao3_scrap = ?,
		descricao4_scrap = ?,
		descricao5_scrap = ?,
		descricao6_scrap = ?,
		qtd1_scrap = ?,
		qtd2_scrap = ?,
		qtd3_scrap = ?,
		qtd4_scrap = ?,
		qtd5_scrap = ?,
		qtd6_scrap = ?,
		motivo1_scrap = ?,
		motivo2_scrap = ?,
		motivo3_scrap = ?,
		motivo4_scrap = ?,
		motivo5_scrap = ?,
		motivo6_scrap = ?,
		acao1_scrap = ?,
		acao2_scrap = ?,
		acao3_scrap = ?,
		acao4_scrap = ?,
		acao5_scrap = ?,
		acao6_scrap = ?,
	  	hr_inicial1 = ?,
		hr_inicial2 = ?,
		hr_inicial3 = ?,
		hr_inicial4 = ?,
		hr_inicial5 = ?,
		hr_inicial6 = ?,
		hr_inicial7 = ?,
		hr_inicial8 = ?,
		hr_inicial9 = ?,
		hr_inicial10 = ?,
		hr_final1 = ?,
		hr_final2 = ?,
		hr_final3 = ?,
		hr_final4 = ?,
		hr_final5 = ?,
		hr_final6 = ?,
		hr_final7 = ?,
		hr_final8 = ?,
		hr_final9 = ?,
		hr_final10 = ?,
		setor1 = ?,
		setor2 = ?,
		setor3 = ?,
		setor4 = ?,
		setor5 = ?,
		setor6 = ?,
		setor7 = ?,
		setor8 = ?,
		setor9 = ?,
		setor10 = ?,
		motivo_down1 = ?,
		motivo_down2 = ?,
		motivo_down3 = ?,
		motivo_down4 = ?,
		motivo_down5 = ?,
		motivo_down6 = ?,
		motivo_down7 = ?,
		motivo_down8 = ?,
		motivo_down9 = ?,
		motivo_down10 = ?,
		atendente1 = ?,
		atendente2 = ?,
		atendente3 = ?,
		atendente4 = ?,
		atendente5 = ?,
		atendente6 = ?,
		atendente7 = ?,
		atendente8 = ?,
		atendente9 = ?,
		atendente10 = ?,
		qtd_hr_parado1 = ?,
		qtd_hr_parado2 = ?,
		qtd_hr_parado3 = ?,
		qtd_hr_parado4 = ?,
		qtd_hr_parado5 = ?,
		qtd_hr_parado6 = ?,
		qtd_hr_parado7 = ?,
		qtd_hr_parado8 = ?,
		qtd_hr_parado9 = ?,
		qtd_hr_parado10 = ?,
		totalhora = ?
	  	WHERE
		id = ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->op);
		$stmt->bindValue(2, $model->processo);
		$stmt->bindValue(3, $model->justificativa);
		$stmt->bindValue(4, $model->data);
		$stmt->bindValue(5, $model->programado1);
		$stmt->bindValue(6, $model->realizado1);
		$stmt->bindValue(7, $model->delta1);
		$stmt->bindValue(8, $model->programado2);
		$stmt->bindValue(9, $model->realizado2);
		$stmt->bindValue(10, $model->delta2);
		$stmt->bindValue(11, $model->programado3);
		$stmt->bindValue(12, $model->realizado3);
		$stmt->bindValue(13, $model->delta3);
		$stmt->bindValue(14, $model->qtd_defeito1);
		$stmt->bindValue(15, $model->qtd_defeito2);
		$stmt->bindValue(16, $model->qtd_defeito3);
		$stmt->bindValue(17, $model->defeitos_id1);
		$stmt->bindValue(18, $model->defeitos_id2);
		$stmt->bindValue(19, $model->defeitos_id3);
		$stmt->bindValue(20, $model->linhas_id);
		$stmt->bindValue(21, $model->produtos_id);
		$stmt->bindValue(22, $model->turnos_id);
		$stmt->bindValue(23, $model->cod_produto1);
		$stmt->bindValue(24, $model->cod_produto2);
		$stmt->bindValue(25, $model->cod_produto3);
		$stmt->bindValue(26, $model->motivo1_bloqueio);
		$stmt->bindValue(27, $model->motivo2_bloqueio);
		$stmt->bindValue(28, $model->motivo3_bloqueio);
		$stmt->bindValue(29, $model->qtd1_bloqueio);
		$stmt->bindValue(30, $model->qtd2_bloqueio);
		$stmt->bindValue(31, $model->qtd3_bloqueio);
		$stmt->bindValue(32, $model->acao1_bloqueio);
		$stmt->bindValue(33, $model->acao2_bloqueio);
		$stmt->bindValue(34, $model->acao3_bloqueio);
		$stmt->bindValue(35, $model->codigo1_scrap);
		$stmt->bindValue(36, $model->codigo2_scrap);
		$stmt->bindValue(37, $model->codigo3_scrap);
		$stmt->bindValue(38, $model->codigo4_scrap);
		$stmt->bindValue(39, $model->codigo5_scrap);
		$stmt->bindValue(40, $model->codigo6_scrap);
		$stmt->bindValue(41, $model->descricao1_scrap);
		$stmt->bindValue(42, $model->descricao2_scrap);
		$stmt->bindValue(43, $model->descricao3_scrap);
		$stmt->bindValue(44, $model->descricao4_scrap);
		$stmt->bindValue(45, $model->descricao5_scrap);
		$stmt->bindValue(46, $model->descricao6_scrap);
		$stmt->bindValue(47, $model->qtd1_scrap);
		$stmt->bindValue(48, $model->qtd2_scrap);
		$stmt->bindValue(49, $model->qtd3_scrap);
		$stmt->bindValue(50, $model->qtd4_scrap);
		$stmt->bindValue(51, $model->qtd5_scrap);
		$stmt->bindValue(52, $model->qtd6_scrap);
		$stmt->bindValue(53, $model->motivo1_scrap);
		$stmt->bindValue(54, $model->motivo2_scrap);
		$stmt->bindValue(55, $model->motivo3_scrap);
		$stmt->bindValue(56, $model->motivo4_scrap);
		$stmt->bindValue(57, $model->motivo5_scrap);
		$stmt->bindValue(58, $model->motivo6_scrap);
		$stmt->bindValue(59, $model->acao1_scrap);
		$stmt->bindValue(60, $model->acao2_scrap);
		$stmt->bindValue(61, $model->acao3_scrap);
		$stmt->bindValue(62, $model->acao4_scrap);
		$stmt->bindValue(63, $model->acao5_scrap);
		$stmt->bindValue(64, $model->acao6_scrap);
		$stmt->bindValue(65, $model->hr_inicial1);
		$stmt->bindValue(66, $model->hr_inicial2);
		$stmt->bindValue(67, $model->hr_inicial3);
		$stmt->bindValue(68, $model->hr_inicial4);
		$stmt->bindValue(69, $model->hr_inicial5);
		$stmt->bindValue(70, $model->hr_inicial6);
		$stmt->bindValue(71, $model->hr_inicial7);
		$stmt->bindValue(72, $model->hr_inicial8);
		$stmt->bindValue(73, $model->hr_inicial9);
		$stmt->bindValue(74, $model->hr_inicial10);
		$stmt->bindValue(75, $model->hr_final1);
		$stmt->bindValue(76, $model->hr_final2);
		$stmt->bindValue(77, $model->hr_final3);
		$stmt->bindValue(78, $model->hr_final4);
		$stmt->bindValue(79, $model->hr_final5);
		$stmt->bindValue(80, $model->hr_final6);
		$stmt->bindValue(81, $model->hr_final7);
		$stmt->bindValue(82, $model->hr_final8);
		$stmt->bindValue(83, $model->hr_final9);
		$stmt->bindValue(84, $model->hr_final10);
		$stmt->bindValue(85, $model->setor1);
		$stmt->bindValue(86, $model->setor2);
		$stmt->bindValue(87, $model->setor3);
		$stmt->bindValue(88, $model->setor4);
		$stmt->bindValue(89, $model->setor5);
		$stmt->bindValue(90, $model->setor6);
		$stmt->bindValue(91, $model->setor7);
		$stmt->bindValue(92, $model->setor8);
		$stmt->bindValue(93, $model->setor9);
		$stmt->bindValue(94, $model->setor10);
		$stmt->bindValue(95, $model->motivo_down1);
		$stmt->bindValue(96, $model->motivo_down2);
		$stmt->bindValue(97, $model->motivo_down3);
		$stmt->bindValue(98, $model->motivo_down4);
		$stmt->bindValue(99, $model->motivo_down5);
		$stmt->bindValue(100, $model->motivo_down6);
		$stmt->bindValue(101, $model->motivo_down7);
		$stmt->bindValue(102, $model->motivo_down8);
		$stmt->bindValue(103, $model->motivo_down9);
		$stmt->bindValue(104, $model->motivo_down10);
		$stmt->bindValue(105, $model->atendente1);
		$stmt->bindValue(106, $model->atendente2);
		$stmt->bindValue(107, $model->atendente3);
		$stmt->bindValue(108, $model->atendente4);
		$stmt->bindValue(109, $model->atendente5);
		$stmt->bindValue(110, $model->atendente6);
		$stmt->bindValue(111, $model->atendente7);
		$stmt->bindValue(112, $model->atendente8);
		$stmt->bindValue(113, $model->atendente9);
		$stmt->bindValue(114, $model->atendente10);
		$stmt->bindValue(115, $model->qtd_hr_parado1);
		$stmt->bindValue(116, $model->qtd_hr_parado2);
		$stmt->bindValue(117, $model->qtd_hr_parado3);
		$stmt->bindValue(118, $model->qtd_hr_parado4);
		$stmt->bindValue(119, $model->qtd_hr_parado5);
		$stmt->bindValue(120, $model->qtd_hr_parado6);
		$stmt->bindValue(121, $model->qtd_hr_parado7);
		$stmt->bindValue(122, $model->qtd_hr_parado8);
		$stmt->bindValue(123, $model->qtd_hr_parado9);
		$stmt->bindValue(124, $model->qtd_hr_parado10);
		$stmt->bindValue(125, $model->totalhora);
		$stmt->bindValue(126, $model->id);
		try {
			$stmt->execute();
		} catch (PDOException $e) {

			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function selectByLoginInformativo(string $data)
	{
		$sql = "SELECT informativo.*, linhas.nome AS nome_linha, produtos.nome AS produto_nome, turnos.nome AS turno_nome , usuario.nome as usuario_nome, usuario.login as usuario_login
		FROM informativo, linhas, turnos, produtos, usuario WHERE linhas.id = linhas_id AND produtos.id = produtos_id AND turnos.id = turnos_id AND usuario.id = usuario_id AND informativo.data LIKE '%$data%' ORDER BY informativo.data DESC";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function select()
	{
		$sql = "SELECT informativo.*, linhas.nome AS nome_linha, produtos.nome AS produto_nome, turnos.nome AS turno_nome , usuario.nome as usuario_nome, usuario.login as usuario_login
		FROM informativo, linhas, turnos, produtos, usuario WHERE linhas.id = linhas_id AND produtos.id = produtos_id AND turnos.id = turnos_id AND usuario.id = usuario_id ORDER BY informativo.data DESC";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id)
	{
		$sql = "SELECT informativo.*, linhas.nome AS linha_nome, defeitos.nome AS defeito_nome, produtos.nome AS produto_nome, turnos.nome AS turno_nome , usuario.nome as usuario_nome, usuario.login as usuario_login
		FROM informativo, linhas, turnos, produtos, defeitos, usuario WHERE linhas.id = linhas_id AND produtos.id = produtos_id AND turnos.id = turnos_id AND informativo.id = ? AND usuario.id = usuario_id ORDER BY informativo.data DESC";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

		return $stmt->fetchObject("controle_de_producao\Models\ProducaoModel");
	}
}
