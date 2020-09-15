-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Set-2020 às 03:22
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id10939726_wda_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` varchar(8) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `ie` varchar(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(1, 'Felipe', '45876074870', '31032003', 'aaaa', 'aaa', 18190000, 'araçoiaba', 'sp', '15981361234', '15981361234', '11111111111', '2020-01-15 10:41:13', '2020-01-15 10:41:13'),
(3, 'Francine', '45876074870', '31032003', 'aaaa', 'aaa', 18190000, 'araçoiaba', 'sp', '15981361234', '15981361234', '11111111111', '2020-01-15 12:50:46', '2020-01-15 12:51:01'),
(4, 'Leonarndo', '11111111111', '10101000', 'sadlkasçlkd', 'lkasçdlkasçl', 18190000, 'asdkslakdj', 'sp', '1111111111', '11111111111', '11111111111', '2020-08-14 20:37:29', '2020-08-14 20:37:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mv`
--

CREATE TABLE `mv` (
  `id` int(11) NOT NULL,
  `filme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diretor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duracao` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mv`
--

INSERT INTO `mv` (`id`, `filme`, `diretor`, `duracao`, `ano`) VALUES
(1, 'teste', 'teste', 2, 2020),
(5, 'Sla', 'Djsk', 19, 2010),
(6, 'Hulk', 'Steven Spielberg', 2, 2000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `descri` varchar(50) NOT NULL,
  `quant` int(11) NOT NULL,
  `precounit` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name_pro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descri`, `quant`, `precounit`, `created`, `modified`, `name_pro`) VALUES
(2, 'Teste', 110, 10, '2019-09-20 11:15:32', '2019-09-20 11:15:32', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `NOME` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `lvl_acess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`NOME`, `SENHA`, `id`, `lvl_acess`) VALUES
('guest', 'c6f057b86584942e415435ffb1fa93d4', 9, 3),
('webmaster', 'c6f057b86584942e415435ffb1fa93d4', 10, 1),
('user', 'c6f057b86584942e415435ffb1fa93d4', 12, 2),
('teste', '698dc19d489c4e4db73e28a713eab07b', 14, 2),
('Katylin', 'b35e7f0bff4050a108e7bb4b0295f995', 15, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mv`
--
ALTER TABLE `mv`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `mv`
--
ALTER TABLE `mv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
