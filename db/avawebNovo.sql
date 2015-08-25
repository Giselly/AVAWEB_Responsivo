-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.28
-- Versão do PHP: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `avaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulos`
--

CREATE TABLE IF NOT EXISTS `capitulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `conteudo` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `capitulos`
--

INSERT INTO `capitulos` (`id`, `ordem`, `titulo`, `subtitulo`, `conteudo`) VALUES
(1, 1, 'Capitulo 1', 'Subtitulo do capitulo 1', 'Conteudo do capitulo 1'),
(2, 2, 'Capitulo 2', 'Subtitulo do capitulo 2', 'Conteudo do capitulo 2'),
(3, 3, 'Capitulo 3', 'Subtitulo do capitulo 3', 'Conteudo do capitulo 3'),
(4, 4, 'Capitulo 4', 'Subtitulo do capitulo 4', 'Conteudo do capitulo 4'),
(5, 5, 'Capitulo 5', 'Subtitulo do capitulo 5', 'Conteudo do capitulo 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exerciciosconcluidos`
--

CREATE TABLE IF NOT EXISTS `exerciciosconcluidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCapitulo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exerc_capitulo_idx` (`idCapitulo`),
  KEY `fk_exerc_usuarios_idx` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `exerciciosconcluidos`
--

INSERT INTO `exerciciosconcluidos` (`id`, `idCapitulo`, `idUsuario`, `nota`) VALUES
(8, 1, 10, 3.33333),
(9, 1, 10, 3.33333),
(11, 1, 10, 10),
(12, 1, 10, 3.33333),
(13, 1, 10, 3.33333),
(14, 1, 10, 6.66667),
(15, 1, 10, 3.33333);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestoes` int(11) DEFAULT NULL,
  `item` mediumtext,
  `valor` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_itens_questoes_idx` (`idQuestoes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `idQuestoes`, `item`, `valor`) VALUES
(1, 1, 'Item 1', 0),
(2, 1, 'Item 2', 0),
(3, 1, 'Item 3', 1),
(4, 1, 'Item 4', 0),
(5, 1, 'Item 5', 0),
(6, 2, 'Item 1', 0),
(7, 2, 'Item 2', 1),
(8, 2, 'Item 3', 0),
(9, 2, 'Item 4', 0),
(10, 2, 'Item 5', 0),
(11, 3, 'Item 1', 0),
(12, 3, 'Item 2', 0),
(13, 3, 'Item 3', 0),
(14, 3, 'Item 4', 0),
(15, 3, 'Item 5', 1),
(16, 4, 'Item 1', 0),
(17, 4, 'Item 2', 0),
(18, 4, 'Item 3', 0),
(19, 4, 'Item 4', 1),
(20, 4, 'Item 5', 0),
(21, 5, 'Item 1', 1),
(22, 5, 'Item 2', 0),
(23, 5, 'Item 3', 0),
(24, 5, 'Item 4', 0),
(25, 5, 'Item 5', 0),
(26, 6, 'Item 1', 0),
(27, 6, 'Item 2', 1),
(28, 6, 'Item 3', 0),
(29, 6, 'Item 4', 0),
(30, 6, 'Item 5', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCapitulo` int(11) DEFAULT NULL,
  `questao` mediumtext,
  PRIMARY KEY (`id`),
  KEY `fk_questoes_capitulos_idx` (`idCapitulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `idCapitulo`, `questao`) VALUES
(1, 1, 'Lorem 1  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(2, 1, 'Lorem 2  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(3, 1, 'Lorem 3 ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(4, 1, 'Lorem 4  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(5, 1, 'Lorem 5  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(6, 1, 'Lorem 6  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumo`
--

CREATE TABLE IF NOT EXISTS `resumo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `capitulo` int(11) NOT NULL,
  `resumo` longtext NOT NULL,
  `enviado` tinyint(4) NOT NULL,
  `aprovacao` tinyint(4) NOT NULL,
  `resposta` longtext NOT NULL,
  `dataAtual` date NOT NULL,
  `notificacao` longtext,
  `dataNotificacao` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `resumo`
--

INSERT INTO `resumo` (`id`, `idUsuario`, `capitulo`, `resumo`, `enviado`, `aprovacao`, `resposta`, `dataAtual`, `notificacao`, `dataNotificacao`) VALUES
(15, 10, 1, '<h2>Todas estas quest&otilde;es, devidamente ponderadas, levantam d&uacute;vidas sobre se a crescente influ&ecirc;ncia da m&iacute;dia facilita a cria&ccedil;&atilde;o das dire&ccedil;&otilde;es preferenciais no sentido do progresso. O que temos que ter sempre em mente &eacute; que a consulta aos diversos militantes representa uma abertura para a melhoria dos modos de opera&ccedil;&atilde;o convencionais. Todavia, o desafiador cen&aacute;rio globalizado acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o das condi&ccedil;&otilde;es financeiras e administrativas exigidas. Ainda assim, existem d&uacute;vidas a respeito de como a hegemonia do ambiente pol&iacute;tico deve passar por modifica&ccedil;&otilde;es independentemente das condi&ccedil;&otilde;es inegavelmente apropriadas. Percebemos, cada vez mais, que o comprometimento entre as equipes maximiza as possibilidades por conta do impacto na agilidade decis&oacute;ria.</h2>\r\n<h2>Caros amigos, a revolu&ccedil;&atilde;o dos costumes causa impacto indireto na reavalia&ccedil;&atilde;o dos conhecimentos estrat&eacute;gicos para atingir a excel&ecirc;ncia. Desta maneira, o novo modelo estrutural aqui preconizado desafia a capacidade de equaliza&ccedil;&atilde;o das formas de a&ccedil;&atilde;o. As experi&ecirc;ncias acumuladas demonstram que a necessidade de renova&ccedil;&atilde;o processual estende o alcance e a import&acirc;ncia das diretrizes de desenvolvimento para o futuro.</h2>\r\n<h2>Por outro lado, a estrutura atual da organiza&ccedil;&atilde;o ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a das diversas correntes de pensamento. Podemos j&aacute; vislumbrar o modo pelo qual a complexidade dos estudos efetuados obstaculiza a aprecia&ccedil;&atilde;o da import&acirc;ncia das regras de conduta normativas. Assim mesmo, a percep&ccedil;&atilde;o das dificuldades nos obriga &agrave; an&aacute;lise de todos os recursos funcionais envolvidos.</h2>\r\n<h2>Por conseguinte, a execu&ccedil;&atilde;o dos pontos do programa prepara-nos para enfrentar situa&ccedil;&otilde;es at&iacute;picas decorrentes do fluxo de informa&ccedil;&otilde;es. Pensando mais a longo prazo, o julgamento imparcial das eventualidades exige a precis&atilde;o e a defini&ccedil;&atilde;o dos &iacute;ndices pretendidos. Gostaria de enfatizar que a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras pode nos levar a considerar a reestrutura&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral. Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que a consolida&ccedil;&atilde;o das estruturas assume importantes posi&ccedil;&otilde;es no estabelecimento da gest&atilde;o inovadora da qual fazemos parte.</h2>\r\n<h2>N&atilde;o obstante, o in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes agrega valor ao estabelecimento do or&ccedil;amento setorial. Do mesmo modo, o aumento do di&aacute;logo entre os diferentes setores produtivos &eacute; uma das consequ&ecirc;ncias das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. A certifica&ccedil;&atilde;o de metodologias que nos auxiliam a lidar com a competitividade nas transa&ccedil;&otilde;es comerciais apresenta tend&ecirc;ncias no sentido de aprovar a manuten&ccedil;&atilde;o dos paradigmas corporativos.&nbsp;</h2>', 0, 0, '', '2015-08-19', NULL, NULL),
(20, 10, 2, '<h2>Lorem ipsum dolor sit amet</h2>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains</p>', 0, 0, '', '2015-08-20', NULL, NULL),
(21, 10, 2, '<h2>Lorem ipsum dolor sit amet</h2>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains</p>', 0, 0, '', '2015-08-20', NULL, NULL),
(22, 10, 3, '<h2><span style="color: #993366; background-color: #e6ceeb;">Lorem ipsum dolor sit amet</span></h2>\r\n<p style="text-align: justify;"><span style="color: #993366; background-color: #e6ceeb;"><strong>&nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></span></p>\r\n<p style="text-align: justify;"><span style="color: #993366; background-color: #e6ceeb;"><strong>&nbsp; &nbsp; &nbsp;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</strong></span></p>\r\n<p style="text-align: justify;"><span style="color: #993366; background-color: #e6ceeb;"><strong>&nbsp; &nbsp; &nbsp;In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</strong></span></p>', 0, 0, '', '2015-08-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `nomeMae` varchar(70) DEFAULT NULL,
  `nomePai` varchar(70) DEFAULT NULL,
  `estadoCivil` varchar(25) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'default.jpg',
  `dataNascimento` datetime DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `cep` varchar(10) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `capituloAtual` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `login`, `senha`, `cpf`, `rg`, `sexo`, `nomeMae`, `nomePai`, `estadoCivil`, `foto`, `dataNascimento`, `email`, `telefone`, `status`, `cep`, `endereco`, `bairro`, `capituloAtual`) VALUES
(10, 'Administrador do sistema', 'Administrador do sistema', 'admin', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 3),
(11, 'Nicolas', 'Nicolas', 'nicolas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `exerciciosconcluidos`
--
ALTER TABLE `exerciciosconcluidos`
  ADD CONSTRAINT `fk_exerc_capitulo` FOREIGN KEY (`idCapitulo`) REFERENCES `capitulos` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exerc_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON UPDATE NO ACTION;

--
-- Restrições para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `fk_itens_questoes` FOREIGN KEY (`idQuestoes`) REFERENCES `questoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `resumo`
--
ALTER TABLE `resumo`
  ADD CONSTRAINT `resumo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
