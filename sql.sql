CREATE TABLE IF NOT EXISTS `atendentes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `defeitos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `defeitos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cod_defeito` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `informativo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `informativo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `op` VARCHAR(45) NULL DEFAULT NULL,
  `processo` VARCHAR(45) NULL DEFAULT NULL,
  `justificativa` VARCHAR(200) NULL DEFAULT NULL,
  `data` DATE NULL DEFAULT NULL,
  `programado1` INT NULL DEFAULT '0',
  `programado2` INT NULL DEFAULT NULL,
  `programado3` INT NULL DEFAULT NULL,
  `realizado1` INT NULL DEFAULT '0',
  `realizado2` INT NULL DEFAULT NULL,
  `realizado3` INT NULL DEFAULT NULL,
  `delta1` INT NULL DEFAULT '0',
  `delta2` INT NULL DEFAULT NULL,
  `delta3` INT NULL DEFAULT NULL,
  `qtd_defeito1` INT NULL DEFAULT NULL,
  `qtd_defeito2` INT NULL DEFAULT NULL,
  `qtd_defeito3` INT NULL DEFAULT NULL,
  `defeitos_id1` INT NULL DEFAULT NULL,
  `defeitos_id2` INT NULL DEFAULT NULL,
  `defeitos_id3` INT NULL DEFAULT NULL,
  `linhas_id` INT NULL DEFAULT NULL,
  `produtos_id` INT NULL DEFAULT NULL,
  `turnos_id` INT NULL DEFAULT NULL,
  `cod_produto1` INT NULL DEFAULT NULL,
  `cod_produto2` INT NULL DEFAULT NULL,
  `cod_produto3` INT NULL DEFAULT NULL,
  `motivo1_bloqueio` VARCHAR(100) NULL DEFAULT NULL,
  `motivo2_bloqueio` VARCHAR(100) NULL DEFAULT NULL,
  `motivo3_bloqueio` VARCHAR(100) NULL DEFAULT NULL,
  `qtd1_bloqueio` INT NULL DEFAULT NULL,
  `qtd2_bloqueio` INT NULL DEFAULT NULL,
  `qtd3_bloqueio` INT NULL DEFAULT NULL,
  `acao1_bloqueio` VARCHAR(200) NULL DEFAULT NULL,
  `acao2_bloqueio` VARCHAR(200) NULL DEFAULT NULL,
  `acao3_bloqueio` VARCHAR(200) NULL DEFAULT NULL,
  `codigo1_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `codigo2_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `codigo3_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `codigo4_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `codigo5_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `codigo6_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao1_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao2_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao3_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao4_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao5_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `descricao6_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd1_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd2_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd3_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd4_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd5_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `qtd6_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo1_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo2_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo3_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo4_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo5_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `motivo6_scrap` VARCHAR(100) NULL DEFAULT NULL,
  `acao1_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `acao2_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `acao3_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `acao4_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `acao5_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `acao6_scrap` VARCHAR(200) NULL DEFAULT NULL,
  `hr_inicial1` TIME NULL DEFAULT NULL,
  `hr_inicial2` TIME NULL DEFAULT NULL,
  `hr_inicial3` TIME NULL DEFAULT NULL,
  `hr_inicial4` TIME NULL DEFAULT NULL,
  `hr_inicial5` TIME NULL DEFAULT NULL,
  `hr_inicial6` TIME NULL DEFAULT NULL,
  `hr_inicial7` TIME NULL DEFAULT NULL,
  `hr_inicial8` TIME NULL DEFAULT NULL,
  `hr_inicial9` TIME NULL DEFAULT NULL,
  `hr_inicial10` TIME NULL DEFAULT NULL,
  `hr_final1` TIME NULL DEFAULT NULL,
  `hr_final2` TIME NULL DEFAULT NULL,
  `hr_final3` TIME NULL DEFAULT NULL,
  `hr_final4` TIME NULL DEFAULT NULL,
  `hr_final5` TIME NULL DEFAULT NULL,
  `hr_final6` TIME NULL DEFAULT NULL,
  `hr_final7` TIME NULL DEFAULT NULL,
  `hr_final8` TIME NULL DEFAULT NULL,
  `hr_final9` TIME NULL DEFAULT NULL,
  `hr_final10` TIME NULL DEFAULT NULL,
  `setor1` INT NULL DEFAULT NULL,
  `setor2` INT NULL DEFAULT NULL,
  `setor3` INT NULL DEFAULT NULL,
  `setor4` INT NULL DEFAULT NULL,
  `setor5` INT NULL DEFAULT NULL,
  `setor6` INT NULL DEFAULT NULL,
  `setor7` INT NULL DEFAULT NULL,
  `setor8` INT NULL DEFAULT NULL,
  `setor9` INT NULL DEFAULT NULL,
  `setor10` INT NULL DEFAULT NULL,
  `motivo_down1` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down2` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down3` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down4` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down5` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down6` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down7` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down8` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down9` VARCHAR(100) NULL DEFAULT NULL,
  `motivo_down10` VARCHAR(100) NULL DEFAULT NULL,
  `atendente1` INT NULL DEFAULT NULL,
  `atendente2` INT NULL DEFAULT NULL,
  `atendente3` INT NULL DEFAULT NULL,
  `atendente4` INT NULL DEFAULT NULL,
  `atendente5` INT NULL DEFAULT NULL,
  `atendente6` INT NULL DEFAULT NULL,
  `atendente7` INT NULL DEFAULT NULL,
  `atendente8` INT NULL DEFAULT NULL,
  `atendente9` INT NULL DEFAULT NULL,
  `atendente10` INT NULL DEFAULT NULL,
  `qtd_hr_parado1` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado2` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado3` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado4` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado5` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado6` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado7` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado8` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado9` VARCHAR(100) NULL DEFAULT NULL,
  `qtd_hr_parado10` VARCHAR(100) NULL DEFAULT NULL,
  `totalhora` VARCHAR(20) NULL DEFAULT NULL,
  `usuario_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_informativo_defeitos_idx` (`defeitos_id1` ASC),
  INDEX `fk_informativo_linhas1_idx` (`linhas_id` ASC),
  INDEX `fk_informativo_produtos1_idx` (`produtos_id` ASC),
  INDEX `fk_informativo_turnos1_idx` (`turnos_id` ASC),
  INDEX `fk_informativo_usuario1_idx` (`usuario_id` ASC),
  INDEX `fk_informativo_produtos2_idx` (`cod_produto1` ASC),
  INDEX `fk_informativo_produtos3_idx` (`cod_produto2` ASC),
  INDEX `fk_informativo_produtos4_idx` (`cod_produto3` ASC),
  INDEX `fk_informativo_defeitos1_idx` (`defeitos_id2` ASC),
  INDEX `fk_informativo_defeitos2_idx` (`defeitos_id3` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `linhas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `linhas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_linhas_setores1_idx` (`setor_id` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `perdas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `perdas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `programado` DECIMAL(10,2) NOT NULL,
  `realizado` DECIMAL(10,2) NOT NULL,
  `delta` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cod_produto` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`, `cod_produto`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `setores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `setores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `turnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turnos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB;