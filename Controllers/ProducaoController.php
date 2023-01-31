<?php

namespace controle_de_producao\Controllers;

use controle_de_producao\Models\LoginModel;
use controle_de_producao\Models\DefeitoModel;
use controle_de_producao\Models\ProdutoModel;
use controle_de_producao\Models\LinhaModel;
use controle_de_producao\Models\TurnoModel;
use controle_de_producao\Models\ProducaoModel;
use controle_de_producao\Models\AtendenteModel;
use controle_de_producao\Models\SetorModel;

//Criando o Controller da Produção
class ProducaoController
{
	//Método para exibir a pagina Produção 
	public static function index()
	{
		if (isset($_SESSION['login'])) {

			$modelLogin = new LoginModel();
			$modelDefeito = new DefeitoModel();
			$modelProduto = new ProdutoModel();
			$modelLinha = new LinhaModel();
			$modelTurno = new TurnoModel();
			$modelProducao = new ProducaoModel();
			$modelAtendente = new AtendenteModel();
			$modelSetor = new SetorModel();

			if (isset($_GET['id'])) {
				$modelProducao = $modelProducao->getById((int) $_GET['id'], $_SESSION['login']);
			}
			$modelLogin = $modelLogin->getByLogin($_SESSION['login']);
			$modelDefeito->getAllRows();
			$modelProduto->getAllRows();
			$modelLinha->getAllRows();
			$modelTurno->getAllRows();
			$modelAtendente->getAllRows();
			$modelSetor->getAllRows();
			include 'Views/Producao/producao.php';
		} else {
			header('location: /');
		}
	}
	public static function informativos()
	{
		if (isset($_SESSION['login'])) {
			$modelLogin = new LoginModel();
			$modelDefeito = new DefeitoModel();
			$modelProduto = new ProdutoModel();
			$modelLinha = new LinhaModel();
			$modelTurno = new TurnoModel();
			$modelAtendente = new AtendenteModel();
			$modelSetor = new SetorModel();

			if (isset($_SESSION['login'])) {
				$modelLogin = $modelLogin->getByLogin($_SESSION['login']);
				$modelDefeito->getAllRows();
				$modelProduto->getAllRows();
				$modelLinha->getAllRows();
				$modelTurno->getAllRows();
				$modelAtendente->getAllRows();
				$modelSetor->getAllRows();

				include 'Views/Producao/ver_informativo.php';
			} else {
				header('location: /');
			}
		} else {
			header('location: /');
		}
	}

	public static function ajax()
	{
		$modelLogin = new LoginModel();
		$modelDefeito = new DefeitoModel();
		$modelProduto = new ProdutoModel();
		$modelLinha = new LinhaModel();
		$modelTurno = new TurnoModel();
		$modelAtendente = new AtendenteModel();
		$modelSetor = new SetorModel();
		$modelProducao = new ProducaoModel();
		$modelLogin = $modelLogin->getByLogin($_SESSION['login']);
		$modelDefeito->getAllRows();
		$modelProduto->getAllRows();
		$modelLinha->getAllRows();
		$modelTurno->getAllRows();
		$modelAtendente->getAllRows();
		$modelSetor->getAllRows();
		if (isset($_POST['search'])) {
			$modelProducao->getLoginRows($_POST['search']);

			include 'Assets/Ajax/table_informativo_ajax.php';
		} else {
			$modelProducao->getAllRows();
			include 'Assets/Ajax/table_informativo_ajax.php';
		}
	}
	//metodo para criar table do excel
	public static function ajaxExcel()
	{
		$modelLogin = new LoginModel();
		$modelDefeito = new DefeitoModel();
		$modelProduto = new ProdutoModel();
		$modelLinha = new LinhaModel();
		$modelTurno = new TurnoModel();
		$modelAtendente = new AtendenteModel();
		$modelSetor = new SetorModel();
		$modelProducao = new ProducaoModel();
		$modelLogin = $modelLogin->getByLogin($_SESSION['login']);
		$modelDefeito->getAllRows();
		$modelProduto->getAllRows();
		$modelLinha->getAllRows();
		$modelTurno->getAllRows();
		$modelAtendente->getAllRows();
		$modelSetor->getAllRows();
		if (isset($_POST['search'])) {
			$modelProducao->getLoginRows($_POST['search']);

			include 'Assets/Ajax/table_excel_informativo_ajax.php';
		} else {
			$modelProducao->getAllRows();
			include 'Assets/Ajax/table_excel_informativo_ajax.php';
		}
	}

	//Método para salvar a Produção
	public static function save()
	{
		if (isset($_SESSION['login'])) {
			//Criando objeto
			$model = new ProducaoModel();

			//Pegando os dados do formulário.
			date_default_timezone_set("America/Manaus");

			$model->op = $_POST['op'];
			$model->processo = $_POST['processo'];
			$model->justificativa = $_POST['justificativa'];
			$model->data = $_POST['data'];
			$model->programado1 = $_POST['programado1'];
			$model->realizado1 = $_POST['realizado1'];
			$model->delta1 = $_POST['delta1'];
			$model->programado2 = $_POST['programado2'];
			$model->realizado2 = $_POST['realizado2'];
			$model->delta2 = $_POST['delta2'];
			$model->programado3 = $_POST['programado3'];
			$model->realizado3 = $_POST['realizado3'];
			$model->delta3 = $_POST['delta3'];
			$model->qtd_defeito1 = $_POST['qtd_defeito1'];
			$model->qtd_defeito2 = $_POST['qtd_defeito2'];
			$model->qtd_defeito3 = $_POST['qtd_defeito3'];
			$model->defeitos_id1 = $_POST['defeitos_id1'];
			$model->defeitos_id2 = $_POST['defeitos_id2'];
			$model->defeitos_id3 = $_POST['defeitos_id3'];
			$model->linhas_id = $_POST['linha'];
			$model->produtos_id = $_POST['produto'];
			$model->turnos_id = $_POST['turno'];
			$model->cod_produto1 = $_POST['cod_produto1'];
			$model->cod_produto2 = $_POST['cod_produto2'];
			$model->cod_produto3 = $_POST['cod_produto3'];
			$model->usuario_id = $_POST['id_responsavel'];
			$model->motivo1_bloqueio = $_POST['motivo1_bloqueio'];
			$model->motivo2_bloqueio = $_POST['motivo2_bloqueio'];
			$model->motivo3_bloqueio = $_POST['motivo3_bloqueio'];
			$model->qtd1_bloqueio = $_POST['qtd1_bloqueio'];
			$model->qtd2_bloqueio = $_POST['qtd2_bloqueio'];
			$model->qtd3_bloqueio = $_POST['qtd3_bloqueio'];
			$model->acao1_bloqueio = $_POST['acao1_bloqueio'];
			$model->acao2_bloqueio = $_POST['acao2_bloqueio'];
			$model->acao3_bloqueio = $_POST['acao3_bloqueio'];
			$model->codigo1_scrap = $_POST['codigo1_scrap'];
			$model->codigo2_scrap = $_POST['codigo2_scrap'];
			$model->codigo3_scrap = $_POST['codigo3_scrap'];
			$model->codigo4_scrap = $_POST['codigo4_scrap'];
			$model->codigo5_scrap = $_POST['codigo5_scrap'];
			$model->codigo6_scrap = $_POST['codigo6_scrap'];
			$model->descricao1_scrap = $_POST['descricao1_scrap'];
			$model->descricao2_scrap = $_POST['descricao2_scrap'];
			$model->descricao3_scrap = $_POST['descricao3_scrap'];
			$model->descricao4_scrap = $_POST['descricao4_scrap'];
			$model->descricao5_scrap = $_POST['descricao5_scrap'];
			$model->descricao6_scrap = $_POST['descricao6_scrap'];
			$model->qtd1_scrap = $_POST['qtd1_scrap'];
			$model->qtd2_scrap = $_POST['qtd2_scrap'];
			$model->qtd3_scrap = $_POST['qtd3_scrap'];
			$model->qtd4_scrap = $_POST['qtd4_scrap'];
			$model->qtd5_scrap = $_POST['qtd5_scrap'];
			$model->qtd6_scrap = $_POST['qtd6_scrap'];
			$model->motivo1_scrap = $_POST['motivo1_scrap'];
			$model->motivo2_scrap = $_POST['motivo2_scrap'];
			$model->motivo3_scrap = $_POST['motivo3_scrap'];
			$model->motivo4_scrap = $_POST['motivo4_scrap'];
			$model->motivo5_scrap = $_POST['motivo5_scrap'];
			$model->motivo6_scrap = $_POST['motivo6_scrap'];
			$model->acao1_scrap = $_POST['acao1_scrap'];
			$model->acao2_scrap = $_POST['acao2_scrap'];
			$model->acao3_scrap = $_POST['acao3_scrap'];
			$model->acao4_scrap = $_POST['acao4_scrap'];
			$model->acao5_scrap = $_POST['acao5_scrap'];
			$model->acao6_scrap = $_POST['acao6_scrap'];
			$model->atendente1 = $_POST['atendente1'];
			$model->atendente2 = $_POST['atendente2'];
			$model->atendente3 = $_POST['atendente3'];
			$model->atendente4 = $_POST['atendente4'];
			$model->atendente5 = $_POST['atendente5'];
			$model->atendente6 = $_POST['atendente6'];
			$model->atendente7 = $_POST['atendente7'];
			$model->atendente8 = $_POST['atendente8'];
			$model->atendente9 = $_POST['atendente9'];
			$model->atendente10 = $_POST['atendente10'];
			$model->qtd_hr_parado1 = $_POST['qtd_hr_parado1'];
			$model->qtd_hr_parado2 = $_POST['qtd_hr_parado2'];
			$model->qtd_hr_parado3 = $_POST['qtd_hr_parado3'];
			$model->qtd_hr_parado4 = $_POST['qtd_hr_parado4'];
			$model->qtd_hr_parado5 = $_POST['qtd_hr_parado5'];
			$model->qtd_hr_parado6 = $_POST['qtd_hr_parado6'];
			$model->qtd_hr_parado7 = $_POST['qtd_hr_parado7'];
			$model->qtd_hr_parado8 = $_POST['qtd_hr_parado8'];
			$model->qtd_hr_parado9 = $_POST['qtd_hr_parado9'];
			$model->qtd_hr_parado10 = $_POST['qtd_hr_parado10'];
			$model->hr_inicial1 = $_POST['hr_inicial1'];
			$model->hr_final1 = $_POST['hr_final1'];
			$model->setor1 = $_POST['setor1'];
			$model->motivo_down1 = $_POST['motivo_down1'];
			$model->hr_inicial2 = $_POST['hr_inicial2'];
			$model->hr_final2 = $_POST['hr_final2'];
			$model->setor2 = $_POST['setor2'];
			$model->motivo_down2 = $_POST['motivo_down2'];
			$model->hr_inicial3 = $_POST['hr_inicial3'];
			$model->hr_final3 = $_POST['hr_final3'];
			$model->setor3 = $_POST['setor3'];
			$model->motivo_down3 = $_POST['motivo_down3'];
			$model->hr_inicial4 = $_POST['hr_inicial4'];
			$model->hr_final4 = $_POST['hr_final4'];
			$model->setor4 = $_POST['setor4'];
			$model->motivo_down4 = $_POST['motivo_down4'];
			$model->hr_inicial5 = $_POST['hr_inicial5'];
			$model->hr_final5 = $_POST['hr_final5'];
			$model->setor5 = $_POST['setor5'];
			$model->motivo_down5 = $_POST['motivo_down5'];
			$model->hr_inicial6 = $_POST['hr_inicial6'];
			$model->hr_final6 = $_POST['hr_final6'];
			$model->setor6 = $_POST['setor6'];
			$model->motivo_down6 = $_POST['motivo_down6'];
			$model->hr_inicial7 = $_POST['hr_inicial7'];
			$model->hr_final7 = $_POST['hr_final7'];
			$model->setor7 = $_POST['setor7'];
			$model->motivo_down7 = $_POST['motivo_down7'];
			$model->hr_inicial8 = $_POST['hr_inicial8'];
			$model->hr_final8 = $_POST['hr_final8'];
			$model->setor8 = $_POST['setor8'];
			$model->motivo_down8 = $_POST['motivo_down8'];
			$model->hr_inicial9 = $_POST['hr_inicial9'];
			$model->hr_final9 = $_POST['hr_final9'];
			$model->setor9 = $_POST['setor9'];
			$model->motivo_down9 = $_POST['motivo_down9'];
			$model->hr_inicial10 = $_POST['hr_inicial10'];
			$model->hr_final10 = $_POST['hr_final10'];
			$model->setor10 = $_POST['setor10'];
			$model->motivo_down10 = $_POST['motivo_down10'];
			$model->totalhora = $_POST['totalhora'];

			$model->id = $_POST['id'];

			$obj = $model->save();

			//Verificando se o objeto retorna true
			if ($obj) {
				// Se for verdadeiro será redirecionado para uma mensagem de sucesso.
				header('location: /informativo-de-producao?message=success-create&id=' . $model->id);
			} else {
				//Se não for verdadeiro será redirecionado para uma mensagem de erro.
				header('location: /informativo-de-producao?message=error-create');
			}
		} else {
			header('location: /');
		}
	}
}
