-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 03:15
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entregafacil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacos`
--

CREATE TABLE `avaliacos` (
  `id` int(11) NOT NULL,
  `qnt_estrela` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacos`
--

INSERT INTO `avaliacos` (`id`, `qnt_estrela`, `created`, `modified`) VALUES
(4, 3, '2018-05-27 00:53:16', NULL),
(5, 3, '2018-05-28 02:34:46', NULL),
(3, 3, '2018-05-27 00:51:00', NULL),
(6, 3, '2018-05-28 02:44:29', NULL),
(7, 5, '2018-05-28 02:45:28', NULL),
(8, 5, '2018-05-28 02:45:51', NULL),
(9, 5, '2018-05-28 14:25:57', NULL),
(10, 5, '2018-05-28 15:10:23', NULL),
(11, 1, '2018-05-28 16:35:45', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `alimentos_bebidas` varchar(220) NOT NULL,
  `bebes_criancas` varchar(220) NOT NULL,
  `autopecas` varchar(220) NOT NULL,
  `construcao_reforma` varchar(220) NOT NULL,
  `materias_limpeza` varchar(220) NOT NULL,
  `utensílios_domesticos` varchar(220) NOT NULL,
  `saude` varchar(220) NOT NULL,
  `papelarias_livrarias` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCPF` varchar(15) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pedido`
--

CREATE TABLE `dados_pedido` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `pedido` varchar(220) NOT NULL,
  `data_hora` datetime NOT NULL,
  `entrega` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_pedido`
--

INSERT INTO `dados_pedido` (`id`, `nome`, `endereco`, `cep`, `celular`, `pedido`, `data_hora`, `entrega`) VALUES
(1, 'Lidiane Neves', 'AV Professor Caramuru,1088', '68903430', '991879115', 'Dorana', '2018-05-28 00:00:00', NULL),
(2, 'Lidiane Neves', 'AV Professor Caramuru,1088', '68903430', '991879115', 'Dorana', '2018-05-28 00:00:00', NULL),
(3, 'Lidiane Neves', 'AV Professor Caramuru,1088', '68903430', '991879115', 'Pizza Calabresa', '2018-05-28 00:00:00', NULL),
(4, 'Lidiane Neves', 'AV Professor Caramuru,1088', '68903430', '991879115', 'Pizza Calabresa', '2018-05-28 00:00:00', NULL),
(5, 'Lidiane Neves', 'Sei lá', '68903-40', '99187912', 'frango', '2018-05-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `identrega` int(11) NOT NULL,
  `pedido` varchar(60) NOT NULL,
  `categoria` varchar(60) DEFAULT NULL,
  `data_hota` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` int(11) NOT NULL,
  `valor_pedido` float NOT NULL,
  `taxa` float NOT NULL,
  `forma` varchar(1) NOT NULL,
  `FK_cliente` varchar(15) NOT NULL,
  `FK_entrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_idCPF` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(2220) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'lidianeneves79@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'eng.andreloureiro@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'eng.andreloureiro@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacos`
--
ALTER TABLE `avaliacos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCPF`);

--
-- Indexes for table `dados_pedido`
--
ALTER TABLE `dados_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`identrega`),
  ADD KEY `FK_pedido` (`FK_pedido`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`),
  ADD KEY `FK_cliente` (`FK_cliente`),
  ADD KEY `FK_entrega` (`FK_entrega`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `FK_idCPF` (`FK_idCPF`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacos`
--
ALTER TABLE `avaliacos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dados_pedido`
--
ALTER TABLE `dados_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `entrega`
--
ALTER TABLE `entrega`
  MODIFY `identrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idpagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`FK_pedido`) REFERENCES `pedido` (`idpedido`);

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`FK_cliente`) REFERENCES `cliente` (`idCPF`),
  ADD CONSTRAINT `pagamento_ibfk_2` FOREIGN KEY (`FK_entrega`) REFERENCES `entrega` (`identrega`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`FK_idCPF`) REFERENCES `cliente` (`idCPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
