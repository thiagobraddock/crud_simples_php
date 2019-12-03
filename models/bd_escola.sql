-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bd_escola
CREATE DATABASE IF NOT EXISTS `bd_escola` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_escola`;

-- Copiando estrutura para tabela bd_escola.tb_professores
CREATE TABLE IF NOT EXISTS `tb_professores` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `frase_foda` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela bd_escola.tb_professores: 1 rows
/*!40000 ALTER TABLE `tb_professores` DISABLE KEYS */;
INSERT INTO `tb_professores` (`id_prof`, `nome`, `email`, `frase_foda`) VALUES
	(6, 'Thiago', 'braddock01@hotmail.com', 'Sabe pq vc é fraco?'),
	(11, 'Paulo Mora', 'paulo@paulo.com', 'Aqueles que abandonam seus amigos são piores que lixo'),
	(12, 'Sérgio', 'sergio@berranteiro.com', 'Diga-me, você sangra?');
/*!40000 ALTER TABLE `tb_professores` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_escola.tb_usuarios
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `nome` varchar(60) NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela bd_escola.tb_usuarios: 1 rows
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` (`id_usuario`, `username`, `nome`, `passwd`, `status`) VALUES
	(1, 'admin', 'Thiago', 'admin', 1);
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
