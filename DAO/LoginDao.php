<?php

namespace DAO;

use Models\LoginModel;
use \PDOException;
use \PDO;

class LoginDao extends DAO
{
	//construtor da classe
	public function __construct()
	{
		parent::__construct();
	}
	public function insert(LoginModel $model)
	{
		$sql = "INSERT INTO usuario(nome, login, senha) VALUES (?,?,?);";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->login);
		$stmt->bindValue(3, $model->senha);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	public function update(LoginModel $model)
	{
		$sql = "UPDATE usuario SET nome=?, login=?, senha=? WHERE id=?;";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->login);
		$stmt->bindValue(3, $model->senha);
		$stmt->bindValue(4, $model->id);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}
	//Validando login
	public function validarUsuario($login, $senha)
	{
		$sql = "SELECT login, senha FROM usuario WHERE login = ? AND senha = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $login);
		$stmt->bindValue(2, $senha);
		$stmt->execute();

		return $stmt->fetchObject("Models\LoginModel");
	}


	public function selectByLogin(string $login)
	{
		$sql = "SELECT id, nome, login FROM usuario WHERE login = ?";
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $login);
		$stmt->execute();

		return $stmt->fetchObject("Models\LoginModel");
	}

	public function selectAll()
	{
		$sql = "SELECT id, nome, login FROM usuario ";
		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
}
