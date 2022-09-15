-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2020 às 00:30
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exercicio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `telefone` varchar(80) DEFAULT NULL,
  `RG` varchar(80) DEFAULT NULL,
  `CPF` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codigo`, `nome`, `email`, `endereco`, `telefone`, `RG`, `CPF`) VALUES
(1, 'ana clara', 'ana@gmail.com', 'rua da flor', '1564165', '.65.662.', '58946416'),
(3, 'renato', 'renato@ gmail.com', 'rua da flor', '1564165', '.65.662.', '58946416'),
(4, 'hfgh', 'defgsg', 'rua da flor', '1564165', '.65.662.', '58946416');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `codigo` int(11) NOT NULL,
  `funcionario` varchar(90) DEFAULT NULL,
  `endereco` varchar(90) DEFAULT NULL,
  `bairro` varchar(90) DEFAULT NULL,
  `cidade` varchar(90) DEFAULT NULL,
  `uf` int(90) DEFAULT NULL,
  `nomedopai` varchar(90) DEFAULT NULL,
  `nomedamae` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codigo`, `funcionario`, `endereco`, `bairro`, `cidade`, `uf`, `nomedopai`, `nomedamae`) VALUES
(1, 'robson', 'rua costa', 'continental', 'sp', 123, 'mario', 'maria'),
(4, 'gsdg', 'rua da louca', 'jardim burriti', 'sp', 4, 'marta', 'anselmo'),
(5, 'claudio', 'rua da louca', 'jardim burriti', 'htgrdhhdrt', 6, 'erwsrewsgh', 'anselmo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `barra` varchar(80) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `qualidade` varchar(80) DEFAULT NULL,
  `preco` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`codigo`, `nome`, `marca`, `barra`, `tipo`, `qualidade`, `preco`) VALUES
(2, 'choco', 'lacta', '25478', 'chocolate', 'boa', '21,12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `coduser` int(11) NOT NULL,
  `nomeusuario` varchar(64) NOT NULL,
  `usuario` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`coduser`, `nomeusuario`, `usuario`, `senha`, `perfil`) VALUES
(1, 'Gabriela', 'gabi', '81dc9bdb52d04dc20036dbd8313ed055', 'adm'),
(2, 'Anderson', 'andre', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`coduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `coduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
