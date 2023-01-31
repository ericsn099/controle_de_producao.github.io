CREATE TABLE IF NOT EXISTS `atendentes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `defeitos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `defeitos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cod_defeito` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `setores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `setores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `linhas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `linhas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`setor_id`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `perdas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `perdas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `programado` DECIMAL(10, 2) NOT NULL,
  `realizado` DECIMAL(10, 2) NOT NULL,
  `delta` DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cod_produto` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`, `cod_produto`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `turnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turnos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `informativo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `informativo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `op` VARCHAR(45) NOT NULL,
  `processo` VARCHAR(45) NOT NULL,
  `justificativa` VARCHAR(200) NOT NULL,
  `data` DATE NOT NULL,
  `programado1` INT NOT NULL,
  `programado2` INT NOT NULL,
  `programado3` INT NOT NULL,
  `realizado1` INT NOT NULL,
  `realizado2` INT NOT NULL,
  `realizado3` INT NOT NULL,
  `delta1` INT NOT NULL,
  `delta2` INT NOT NULL,
  `delta3` INT NOT NULL,
  `qtd_defeito1` INT NOT NULL,
  `qtd_defeito2` INT NOT NULL,
  `qtd_defeito3` INT NOT NULL,
  `defeitos_id1` INT NOT NULL,
  `defeitos_id2` INT NOT NULL,
  `defeitos_id3` INT NOT NULL,
  `linhas_id` INT NOT NULL,
  `produtos_id` INT NOT NULL,
  `turnos_id` INT NOT NULL,
  `cod_produto1` INT NOT NULL,
  `cod_produto2` INT NOT NULL,
  `cod_produto3` INT NOT NULL,
  `motivo1_bloqueio` VARCHAR(100) NOT NULL,
  `motivo2_bloqueio` VARCHAR(100) NOT NULL,
  `motivo3_bloqueio` VARCHAR(100) NOT NULL,
  `qtd1_bloqueio` INT NOT NULL,
  `qtd2_bloqueio` INT NOT NULL,
  `qtd3_bloqueio` INT NOT NULL,
  `acao1_bloqueio` VARCHAR(200) NOT NULL,
  `acao2_bloqueio` VARCHAR(200) NOT NULL,
  `acao3_bloqueio` VARCHAR(200) NOT NULL,
  `codigo1_scrap` VARCHAR(100) NOT NULL,
  `codigo2_scrap` VARCHAR(100) NOT NULL,
  `codigo3_scrap` VARCHAR(100) NOT NULL,
  `codigo4_scrap` VARCHAR(100) NOT NULL,
  `codigo5_scrap` VARCHAR(100) NOT NULL,
  `codigo6_scrap` VARCHAR(100) NOT NULL,
  `descricao1_scrap` VARCHAR(100) NOT NULL,
  `descricao2_scrap` VARCHAR(100) NOT NULL,
  `descricao3_scrap` VARCHAR(100) NOT NULL,
  `descricao4_scrap` VARCHAR(100) NOT NULL,
  `descricao5_scrap` VARCHAR(100) NOT NULL,
  `descricao6_scrap` VARCHAR(100) NOT NULL,
  `qtd1_scrap` VARCHAR(100) NOT NULL,
  `qtd2_scrap` VARCHAR(100) NOT NULL,
  `qtd3_scrap` VARCHAR(100) NOT NULL,
  `qtd4_scrap` VARCHAR(100) NOT NULL,
  `qtd5_scrap` VARCHAR(100) NOT NULL,
  `qtd6_scrap` VARCHAR(100) NOT NULL,
  `motivo1_scrap` VARCHAR(100) NOT NULL,
  `motivo2_scrap` VARCHAR(100) NOT NULL,
  `motivo3_scrap` VARCHAR(100) NOT NULL,
  `motivo4_scrap` VARCHAR(100) NOT NULL,
  `motivo5_scrap` VARCHAR(100) NOT NULL,
  `motivo6_scrap` VARCHAR(100) NOT NULL,
  `acao1_scrap` VARCHAR(200) NOT NULL,
  `acao2_scrap` VARCHAR(200) NOT NULL,
  `acao3_scrap` VARCHAR(200) NOT NULL,
  `acao4_scrap` VARCHAR(200) NOT NULL,
  `acao5_scrap` VARCHAR(200) NOT NULL,
  `acao6_scrap` VARCHAR(200) NOT NULL,
  `hr_inicial1` TIME NOT NULL,
  `hr_inicial2` TIME NOT NULL,
  `hr_inicial3` TIME NOT NULL,
  `hr_inicial4` TIME NOT NULL,
  `hr_inicial5` TIME NOT NULL,
  `hr_inicial6` TIME NOT NULL,
  `hr_inicial7` TIME NOT NULL,
  `hr_inicial8` TIME NOT NULL,
  `hr_inicial9` TIME NOT NULL,
  `hr_inicial10` TIME NOT NULL,
  `hr_final1` TIME NOT NULL,
  `hr_final2` TIME NOT NULL,
  `hr_final3` TIME NOT NULL,
  `hr_final4` TIME NOT NULL,
  `hr_final5` TIME NOT NULL,
  `hr_final6` TIME NOT NULL,
  `hr_final7` TIME NOT NULL,
  `hr_final8` TIME NOT NULL,
  `hr_final9` TIME NOT NULL,
  `hr_final10` TIME NOT NULL,
  `setor1` INT NOT NULL,
  `setor2` INT NOT NULL,
  `setor3` INT NOT NULL,
  `setor4` INT NOT NULL,
  `setor5` INT NOT NULL,
  `setor6` INT NOT NULL,
  `setor7` INT NOT NULL,
  `setor8` INT NOT NULL,
  `setor9` INT NOT NULL,
  `setor10` INT NOT NULL,
  `motivo_down1` VARCHAR(100) NOT NULL,
  `motivo_down2` VARCHAR(100) NOT NULL,
  `motivo_down3` VARCHAR(100) NOT NULL,
  `motivo_down4` VARCHAR(100) NOT NULL,
  `motivo_down5` VARCHAR(100) NOT NULL,
  `motivo_down6` VARCHAR(100) NOT NULL,
  `motivo_down7` VARCHAR(100) NOT NULL,
  `motivo_down8` VARCHAR(100) NOT NULL,
  `motivo_down9` VARCHAR(100) NOT NULL,
  `motivo_down10` VARCHAR(100) NOT NULL,
  `atendente1` INT NOT NULL,
  `atendente2` INT NOT NULL,
  `atendente3` INT NOT NULL,
  `atendente4` INT NOT NULL,
  `atendente5` INT NOT NULL,
  `atendente6` INT NOT NULL,
  `atendente7` INT NOT NULL,
  `atendente8` INT NOT NULL,
  `atendente9` INT NOT NULL,
  `atendente10` INT NOT NULL,
  `qtd_hr_parado1` VARCHAR(100) NOT NULL,
  `qtd_hr_parado2` VARCHAR(100) NOT NULL,
  `qtd_hr_parado3` VARCHAR(100) NOT NULL,
  `qtd_hr_parado4` VARCHAR(100) NOT NULL,
  `qtd_hr_parado5` VARCHAR(100) NOT NULL,
  `qtd_hr_parado6` VARCHAR(100) NOT NULL,
  `qtd_hr_parado7` VARCHAR(100) NOT NULL,
  `qtd_hr_parado8` VARCHAR(100) NOT NULL,
  `qtd_hr_parado9` VARCHAR(100) NOT NULL,
  `qtd_hr_parado10` VARCHAR(100) NOT NULL,
  `totalhora` VARCHAR(20) NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`atendente1`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente2`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente3`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente4`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente5`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente6`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente7`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente8`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente9`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`atendente10`) REFERENCES `atendentes`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor1`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor2`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor3`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor4`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor5`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor6`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor7`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor8`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor9`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`setor10`) REFERENCES `setores`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`defeitos_id1`) REFERENCES `defeitos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`defeitos_id2`) REFERENCES `defeitos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`defeitos_id3`) REFERENCES `defeitos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`linhas_id`) REFERENCES `linhas`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`produtos_id`) REFERENCES `produtos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`turnos_id`) REFERENCES `turnos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuario`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`cod_produto1`) REFERENCES `produtos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`cod_produto2`) REFERENCES `produtos`(id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`cod_produto3`) REFERENCES `produtos`(id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB;

INSERT INTO
  `atendentes` (`id`, `nome`)
VALUES
  (1, 'FULANO 1'),
  (2, 'FULANO 2'),
  (3, 'FULANO 3'),
  (4, 'FULANO 4'),
  (5, 'FULANO 5'),
  (6, 'N/A');

INSERT INTO
  `defeitos` (`id`, `cod_defeito`, `nome`)
VALUES
  (1, 'N/A', 'N/A'),
  (2, 'PC01', 'NÃO LIGA '),
  (3, 'PC02', 'NÃO RECONHECE USB'),
  (4, 'PC03', 'TRAVADO NO LOGO'),
  (5, 'PC04', 'NÃO RECONHECE HD'),
  (6, 'PC05', 'TRAVA NO TESTE'),
  (7, 'PC06', 'WCDMA'),
  (8, 'PC07', 'FALHA GSM'),
  (9, 'PC08', 'FALHA LTE'),
  (10, 'PC09', 'ENTER MODE'),
  (11, 'PC10', 'NÃO RECONHECE HDMI'),
  (12, 'PC100', 'RX POWER'),
  (13, 'PC101', 'SENSITIVE TEST'),
  (14, 'PC102', 'VOIP'),
  (15, 'PC103', 'ETH/THRUGPUT'),
  (16, 'PC104', 'READ SN/TELNET'),
  (17, 'PC105', 'TRAVANDO NO LOGO'),
  (18, 'PC106', 'PELICULA RISCADA'),
  (19, 'PC107', 'TELA DANIFICADA (DISPLAY)'),
  (20, 'PC108', 'IMPUREZA'),
  (21, 'PC109', 'FURO OBSTRUIDO'),
  (22, 'PC11', 'ALTO FALANTE NÃO FUNCIONA'),
  (23, 'PC110', 'TELA LCD RISCADO'),
  (24, 'PC111', 'PARAFUSO ESPANADO'),
  (25, 'PC112', 'VERSÃO INCORRETA'),
  (26, 'PC113', 'CHECK IMOD'),
  (27, 'PC114', 'RX LOS TEST'),
  (28, 'PC12', 'CÃ¢MERA NÃO FUNCIONA'),
  (29, 'PC13', 'NÃO RECONHECE SD CARD'),
  (30, 'PC14', 'NÃO RECONHECE WIFI'),
  (31, 'PC15', 'BLUETOOTH'),
  (32, 'PC16', 'TOUCHPAD NAO FUNCIONA'),
  (33, 'PC17', 'MICROFONE NÃO FUNCIONA'),
  (34, 'PC18', 'MICROFONE DO FONE NÃO FUNCIONA'),
  (35, 'PC19', 'NAO RECONHECE PORTA LAN'),
  (36, 'PC20', 'NÃO RECONHECE SIM CARD'),
  (37, 'PC21', 'TELA AZUL'),
  (38, 'PC22', 'BOTÃO POWER NAO FUNCIONA'),
  (39, 'PC23', 'BOTÃO VOLUME + NÃO FUNCIONA'),
  (40, 'PC24', 'BOTÃO VOLUME - NÃO FUNCIONA'),
  (41, 'PC25', 'COMPONENTE DANIFICADO'),
  (42, 'PC26', 'NÃO ATUALIZA'),
  (43, 'PC27', 'COMPONENTE ALTO'),
  (44, 'PC28', 'COMPONENTE FALTANDO'),
  (45, 'PC29', 'FONE NG'),
  (46, 'PC30', 'REINICIANDO'),
  (47, 'PC31', 'DESLIGANDO'),
  (48, 'PC32', 'RECEIVER NÃO FUNCIONA'),
  (49, 'PC33', 'LCD ESCURO'),
  (50, 'PC34', 'LCD BRANCO'),
  (51, 'PC35', 'IMAGEM DISTORCIDA'),
  (52, 'PC36', 'VIBRACALL NÃO FUNCIONA'),
  (53, 'PC37', 'NÃO CARREGA'),
  (54, 'PC38', 'GPS NÃO FUNCIONA'),
  (55, 'PC39', 'TECLADO NÃO FUNCIONA'),
  (56, 'PC40', 'NÃO GRAVA MAC'),
  (57, 'PC41', 'SEM INFORMAÇÃO DE SISTEMA'),
  (58, 'PC42', 'VGA'),
  (59, 'PC43', 'LED NÃO LIGA'),
  (60, 'PC44', 'CORRENTE ALTA'),
  (61, 'PC45', 'CORRENTE BAIXA'),
  (62, 'PC46', 'NÃO RECONHECE CONTROLE'),
  (63, 'PC47', 'ERRO FM'),
  (64, 'PC48', 'G-SENSOR NÃO FUNCIONA'),
  (65, 'PC49', 'NÃO GRAVA CHAVE'),
  (66, 'PC50', 'SSD'),
  (67, 'PC51', 'AFC'),
  (68, 'PC52', 'SENSOR MAGNETICO'),
  (69, 'PC53', 'FINGER PRINT'),
  (70, 'PC54', 'NFC'),
  (71, 'PC55', 'NÃO RECONHECE OTG'),
  (72, 'PC56', 'P-SENSOR'),
  (73, 'PC57', 'TSX'),
  (74, 'PC58', 'NÃO RECONHECE AV'),
  (75, 'PC59', 'NÃO RECONHECE PLACA SUB'),
  (76, 'PC60', 'WIFI 2.4G'),
  (77, 'PC61', 'NÃO SINTONIZA'),
  (78, 'PC62', 'NÃO SINTONIZA CANAL'),
  (79, 'PC63', 'RF CAL'),
  (80, 'PC64', 'COMPONENTE DESLOCADO'),
  (81, 'PC65', 'ADDRESS LINE TEST'),
  (82, 'PC66', 'DATA LINE TEST'),
  (83, 'PC67', 'CS TEST'),
  (84, 'PC68', 'CKE TEST'),
  (85, 'PC69', 'MAT'),
  (86, 'PC70', 'BURN-IN'),
  (87, 'PC71', 'CM01/CORRENTE ALTA'),
  (88, 'PC72', 'CM02/SEM IMAGEM'),
  (89, 'PC73', 'CM03/NÃO LIGA'),
  (90, 'PC74', 'CM04/IMAGEM DISTORCIDA'),
  (91, 'PC75', 'CM05/BALANÃO DE COR'),
  (92, 'PC76', 'CM06/SEM FOCO'),
  (93, 'PC77', 'CM07/BORDA PRETA'),
  (94, 'PC78', 'CM08/LED SENSIVEL'),
  (95, 'PC79', 'CM09/LED QUEIMADO'),
  (96, 'PC80', 'CM10/IMAGEM PRETO/BRANCO'),
  (97, 'PC81', 'CM11/LED NÃO LIGA'),
  (98, 'PC82', 'CM12/CORRENTE BAIXA'),
  (99, 'PC83', 'CM13/NÃO FAZ A TROCA'),
  (100, 'PC84', 'CM14'),
  (101, 'PC85', 'CM15/CCD SUJO'),
  (102, 'PC86', 'CM17/DEFEITO COSMÃTICO'),
  (103, 'PC87', 'CM18'),
  (104, 'PC88', 'CM19/TAMPA SUJA'),
  (105, 'PC89', 'CM20'),
  (106, 'PC90', 'CM21/TROCA P/B INCORRETA'),
  (107, 'PC91', 'CM22/TELA COM MANCHA'),
  (108, 'PC92', 'CM23/TELA RISCADA'),
  (109, 'PC93', 'CM24/TELA COM PIXEL'),
  (110, 'PC94', 'CM25/GABINETE RISCADO'),
  (111, 'PC95', 'FALHA NA PORTA LAN'),
  (112, 'PC96', 'WIFI 2.4G'),
  (113, 'PC97', 'WIFI 5G'),
  (114, 'PC98', 'BOB'),
  (115, 'PC99', 'TX POWER');

INSERT INTO
  `setores` (`id`, `nome`)
VALUES
  (1, 'PRODUÇÃO TESTE'),
  (2, 'N/A');

INSERT INTO
  `linhas` (`id`, `nome`, `setor_id`)
VALUES
  (2, 'LT02', 1),
  (3, 'LT03', 1),
  (4, 'N/A', 2),
  (5, 'LT01', 1);

INSERT INTO
  `produtos` (`id`, `cod_produto`, `nome`)
VALUES
  (1, 'S918', 'S23 5G ULTRA'),
  (2, 'S916', 'S23 5G'),
  (3, 'S911', 'S23'),
  (4, 'S908', 'S22 5G ULTRA'),
  (5, 'S906', 'S22 5G'),
  (6, 'S901', 'S22'),
  (7, 'G781', 'S20 FE'),
  (8, 'N/A', 'N/A'),
  (9, 'CPP5009MAOR0', 'MULTI E');

INSERT INTO
  `turnos` (`id`, `nome`)
VALUES
  (1, 'N/A'),
  (2, '1º Turno'),
  (3, '2º Turno'),
  (4, '3º Turno'),
  (5, '1º Turno Especial'),
  (6, '2º Turno Especial'),
  (7, 'Comercial');

INSERT INTO
  `usuario` (`id`, `nome`, `login`, `senha`)
VALUES
  (
    1,
    'Welliton',
    'welliton.negreiros',
    'Multi@1010'
  ),
  (2, 'Eric', 'eric', '123');