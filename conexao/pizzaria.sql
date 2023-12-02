-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 21:39
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--
create database pizzaria;
use pizzaria;
-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_produtos`
--

CREATE TABLE `itens_produtos` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorvenda` decimal(12,2) NOT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `observacao` varchar(500) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `itens_produtos`
--

INSERT INTO `itens_produtos` (`id`, `quantidade`, `valorvenda`, `nomecliente`, `endereco`, `observacao`, `id_produto`) VALUES
(2, 2, 81.00, 'Miguel', 'Centro', 'Sem Borda', 2),
(3, 3, 243.00, 'Miguel', 'Centro', 'Com borda', 1),
(4, 2, 259.20, 'Miguel', 'Centro', 'Sem carne', 3),
(5, 3, 648.00, 'bwebw', 'bwebweb', 'bsdbsb', 5),
(6, 2, 295.20, 'Miguel', 'Avenida 1 - Centro', 'Sem Borda', 4),
(7, 2, 432.00, 'José', 'Centro', 'Borda Recheada', 5),
(8, 1, 81.00, 'Miguel', 'Centro', 'Sem queijo e mais Frango', 2),
(9, 2, 162.00, 'Miguel', 'Centro', 'Sem cebola', 1),
(10, 2, 162.00, 'Miguel', 'Centro', 'Muito Frango', 2),
(11, 2, 223.20, 'Miguel', 'Centro', 'Sem muita pimenta', 9),
(12, 2, 162.00, 'Vitor Elias', 'Avenida Antonio Ribeiro dos Santos', 'Sem borda', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `datacompra` date NOT NULL,
  `acrescentar` varchar(200) DEFAULT NULL,
  `retirar` varchar(200) DEFAULT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `obsentrega` varchar(200) NOT NULL,
  `idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `ingredientes` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorcusto` decimal(12,2) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `ingredientes`, `quantidade`, `valorcusto`, `foto`) VALUES
(1, 'Pizza de Estrogonoff', 'frango, batata palha, molho', 2, 45.00, 'pizza-7.jpg'),
(2, 'Pizza de Frango', 'frango, queijo, azeitona', 5, 45.00, 'pizza-4.jpg'),
(3, 'Pizza de Carne seca', 'carne seca, cebola, queijo', 1, 72.00, 'pizza-5.jpg'),
(4, 'Pizza de Camarão', 'camarão, queijo, pure', 1, 82.00, 'pizza-1.jpg'),
(5, 'Pizza de Chocolate com granulado', 'chocolate, granulado, borda recheada', 1, 120.00, 'pizza-11.jpg'),
(7, 'Pizza de Calabresa', 'calabresa, cebola, queijo', 2, 75.00, 'pizza-9.jpg'),
(8, 'Pizza Doce com bis', 'bis, chocolate, cobertura de nutella', 3, 48.00, 'pizza-13.jpg'),
(9, 'Pizza de Pimentão', 'pimentão, pimenta, queijo', 1, 62.00, 'pizza-14.jpg'),
(10, 'Portuguesa', 'presunto, queijo, cebola', 3, 62.00, 'pizza-15.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'MIguel', 'miguel@123', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `itens_produtos`
--
ALTER TABLE `itens_produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pr_it` (`id_produto`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pro_ped` (`idproduto`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_produtos`
--
ALTER TABLE `itens_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `itens_produtos`
--
ALTER TABLE `itens_produtos`
  ADD CONSTRAINT `fk_pr_it` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pro_ped` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
