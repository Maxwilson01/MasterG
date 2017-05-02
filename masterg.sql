-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2017 às 21:28
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterg`
--
CREATE DATABASE IF NOT EXISTS `masterg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `masterg`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `idcontatos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcontatos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`idcontatos`, `nome`, `email`, `telefone`, `assunto`, `mensagem`) VALUES
(1, 'Miguel Silva', 'miguel@gmail.com', '0839 999-8888', 'Area vip', '0839 999-8888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '0',
  `autor` varchar(50) NOT NULL DEFAULT '0',
  `img` varchar(100) DEFAULT '0',
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`idg`, `titulo`, `autor`, `img`) VALUES
(2, 'Battlefield 4', 'admin', '/MasterG/imgs/bf4.jpg'),
(3, 'Dark Souls ii', 'admin', '/MasterG/imgs/darksouls.jpg'),
(4, 'Dota 2', 'admin', '/MasterG/imgs/dota2.jpg'),
(5, 'World Of Warcraft', 'Bruno', '/MasterG/imgs/wfc.jpg'),
(6, 'Need For Speed Rivals', 'Michael', '/MasterG/imgs/nfsrivals.jpg'),
(7, 'The Legend Of Zelda', 'admin', '/MasterG/imgs/zelda.jpg'),
(8, 'Sega', 'Bruno', '/MasterG/imgs/sega.jpg'),
(9, 'Devil May Cry 4', 'admin', '/MasterG/imgs/devil.jpg'),
(10, 'The Witcher 3', 'Junior', '/MasterG/imgs/twt3.jpg'),
(11, 'GTA V', 'Junior', '/MasterG/imgs/gta5.jpg'),
(12, 'The Last Of Us', 'Junior', '/MasterG/imgs/tus.jpg'),
(13, 'Titanfall', 'Junior', '/MasterG/imgs/titanfall.jpg'),
(14, 'Minecraft', 'Bruno', '/MasterG/imgs/mine.jpg'),
(15, 'Assassin\'s Creed: Unity', 'Bruno', '/MasterG/imgs/ass.jpg'),
(16, 'God Of War', 'Junior', '/MasterG/imgs/god.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `img` varchar(200) DEFAULT '                 ',
  `texto` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `titulo`, `subtitulo`, `img`, `texto`, `autor`, `video`) VALUES
(9, 'DBX 2 para Nintendo Switch ?', 'Dragon ball Xenoverse 2', '/MasterG/imgs/dbx2.png', 'A Bandai Namco confirmou nesta sexta-feira (13) que Dragon Ball XENOVERSE 2 tambÃ©m vai contar com uma versÃ£o para o Nintendo Switch. O tÃ­tulo, jÃ¡ disponÃ­vel para outros consoles e para o PC, promete chegar da forma mais completa possÃ­vel na nova plataforma â€” indÃ­cios de que a companhia pode estar preparando uma versÃ£o especial com todos os DLCs em um Ãºnico pacote. â€œOs jogadores de Nintendo Switch poderÃ£o tambÃ©m partilhar suas experiÃªncias em Dragon Ball XENOVERSE 2 atravÃ©s do modo de jogo cooperativo local, o que permite que eles dividam suas aventuras em Dragon Ball com os amigosâ€, afirma a descriÃ§Ã£o oficial. Segundo a empresa, o tÃ­tulo divulgado ainda tem carÃ¡ter provisÃ³rio e pode mudar antes do lanÃ§amento oficial. A Bandai Namco prepara um pacote bastante atraente para o lanÃ§amento do Switch, que tambÃ©m deve receber um game da sÃ©rie â€œTales ofâ€ e Taiko Drum Master atÃ© o final deste ano. Ainda sem data de lanÃ§amento confirmado, o jogo de Dragon Ball deve ter mais detalhes divulgados em um futuro prÃ³ximo.', 'Michael Hugo', ''),
(10, 'Vida longa a uma nova heroÃ­na e a uma aventura com excelÃªncia tÃ©cnica', 'Horizon: Zero Dawn', '/MasterG/imgs/zerodown.jpg', 'A jornada do herÃ³i Ã© uma teoria que segue as regras do romance tradicional e que apresenta uma pessoa, geralmente de origem humilde, com um destino traÃ§ado na salvaÃ§Ã£o do mundo. Esse alguÃ©m Ã© considerado um predestinado, um escolhido, um ser dotado de habilidades especiais que sÃ£o descobertas ao longo da aventura e posteriormente utilizadas em prol do bem. Horizon: Zero Dawn nÃ£o poderia apostar numa fÃ³rmula diferente, sÃ³ que nÃ£o necessariamente nessa ordem. A jornada de Aloy, a nova aspirante a mascote da Sony, Ã© uma intrÃ­nseca combinaÃ§Ã£o de seis anos de trabalho da Guerrilla Games, que havia usado, atÃ© entÃ£o, toda a sua expertise em Killzone. Transitar de um shooter para um mundo aberto nÃ£o Ã© um processo exatamente natural, tanto que o estÃºdio teve de contratar uma equipe responsÃ¡vel por criar quests e buscar profissionais direcionados a outros setores. Basicamente, Ã© um departamento inÃ©dito no portfÃ³lio da desenvolvedora, e foi o prÃ³prio diretor de lÃ¡ que contou isso para o TecMundo Games em entrevista. O time de produÃ§Ã£o se viu compelido a botar os melhores ingredientes que um mundo aberto exige: imersÃ£o, variedade de coisas a se fazer, personagens com carisma, NPCs que tragam sentimentos, inteligÃªncia artificial que tenha cÃ©rebro, atividades que representem um significado e uma protagonista que dÃª orgulho aos fÃ£s. A soma disso tudo resulta em personalidade. Arsenal, inimigos, equipamentos e todo o resto vÃªm por consequÃªncia. Entre expectativas e adiamentos, o caminho foi longo atÃ© aqui; basicamente, desde 2011. E o seu caminho tambÃ©m vai ser imenso para vocÃª curtir tudinho que essa Ã©pica jornada reserva.\r\n', 'Bruno', 'http://ns.ibxk.com.br/clickjogos/2017/02/24/24222058036002.mp4'),
(19, 'Outlast 2 Ã© banido na AustrÃ¡lia por violÃªncia sexual implÃ­cita', 'Outlast 2', '/MasterG/imgs/Outlast2.jpg', 'Os australianos sÃ£o intransigentes quando atribuem a classificaÃ§Ã£o etÃ¡ria de jogos, filmes, sÃ©ries e outros conteÃºdos de entretenimento. O mais novo integrante dessa (imensa) lista Ã© Outlast 2, que foi banido por lÃ¡. Sim: a sequÃªncia nÃ£o chegarÃ¡ Ã  terra dos cangurus.\r\nA entidade que avalia essa questÃ£o alegou que o jogo â€œexibe, expressa ou trata sobre assuntos de sexo, uso de drogas ou vÃ­cio, crime, crueldade, violÃªncia ou repulsa de uma forma que ofende os padrÃµes da moralidade, da decÃªncia e da propriedade geralmente aceitas por adultos sensatos a um ponto em que nÃ£o devem ser classificadosâ€, justifica o texto do Ã³rgÃ£o.\r\n\r\n<p><center><strong>Resposta da entidade a questionamentos</strong></center></p>\r\n\r\nPerguntada pelo Kotaku Australia sobre tal banimento, a entidade afirmou que o jogo seria â€œpotencialmente etiquetado como 18+ se nÃ£o houvesse violÃªncia sexual implÃ­citaâ€. Foi isso que, nas palavras do estatuto, feriu as regras de aceitaÃ§Ã£o do jogo por lÃ¡.\r\n\r\n<p><center><strong>E agora, como faz?</strong></center></p>\r\nA Red Barrels, desenvolvedora do tÃ­tulo, pode tentar reinscrever seu produto com as mudanÃ§as necessÃ¡rias para que ele seja aceito no paÃ­s oceÃ¢nico. Basicamente: o conteÃºdo teria de ser censurado. Dessa forma, as alteraÃ§Ãµes poderiam dar uma nova chance Ã  classificaÃ§Ã£o etÃ¡ria do jogo por lÃ¡.\r\nA AustrÃ¡lia tem tradiÃ§Ã£o em banir jogos. Manhunt, Hotline Miami 2, Syndicate, Postal e atÃ© mesmo South Park: The Stick of Truth sÃ£o apenas alguns dos nomes que nunca deram as caras naquele paÃ­s ou passaram por censura e precisaram ter o conteÃºdo editado.\r\nE isso porque a coisa melhorou: atÃ© 2013, a idade mÃ¡xima para materiais explÃ­citos/violentos lÃ¡ era de 15 anos (15+). NÃ£o existia um 18+, que sÃ³ veio depois. Ainda assim, as regras sÃ£o rigorosas. Cada paÃ­s com suas diretrizes, certo? Opine sobre o assunto na seÃ§Ã£o destinada aos comentÃ¡rios, logo adiante.', 'KOTAKU AUSTRALIA', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '0',
  `senha` varchar(100) NOT NULL DEFAULT '0',
  `nivel` int(11) DEFAULT '0',
  `valor` int(11) DEFAULT '0',
  `nome` varchar(50) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`iduser`, `email`, `senha`, `nivel`, `valor`, `nome`) VALUES
(1, 'admin@gmail.com', 'admin123', 1500, 0, 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
