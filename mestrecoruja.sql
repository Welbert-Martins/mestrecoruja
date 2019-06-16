-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jun-2019 às 21:46
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mestrecoruja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `index_img` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `dt_postagem` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `usuario` int(11) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `index_img` int(11) NOT NULL,
  `dt_recebe` date DEFAULT NULL,
  `dt_entrega` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `qtd_moedas` int(11) NOT NULL,
  `forma_pagamento` varchar(150) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `nivel` int(11) NOT NULL,
  `venc_cadastro` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `nome`, `email`, `senha`, `cpf`, `qtd_moedas`, `forma_pagamento`, `ativo`, `nivel`, `venc_cadastro`) VALUES
(1, 'Welbert Martins', 'welbert3388@gmail.com', '$2y$10$jlKGbvjrUhTp3jw.y7zcc.5C/2TfmA.1JVHxteBFfcynQHp1GavUK', '08149978640', 200, '1', 1, 1, '2019-12-25'),
(2, 'Joao da Silva', 'joaodasilva@gmail.com', '$2y$10$lxZWo3u1LM.s3XnmyMTS2u8Mxs67GazgTHfcEnSSJ/4pZuzoxaet2', '11111111111', 0, '2', 0, 0, '2019-12-31'),
(3, 'Hebert Prata', 'hebert-prata@hotmail.com', '$2y$10$OBmTZH7rd4IFPepsdNxiTOhu9YmV48rlP4teVkn40EmM.dRmmR4Ii', '11111111111', 0, 'Unitário', 1, 1, '2019-12-10'),
(4, 'Jefferson Campos', 'jefferson@gmail.com', '$2y$10$j82K//IhX7vh.6ncg6ccnOdJOzrQJ285LXbx5ZsIklQa1SmpP1ubC', '22222222222', 0, 'Mensal', 0, 0, '2019-12-10'),
(5, 'Arthur', 'arthur@gmail.com', '$2y$10$0ez8m5JMV19gKigW6udf0OKRREnWSpo3Sm096i5nPSEW0nZ6B22GC', '11111111111', 0, 'Unitário', 0, 0, '2019-12-10'),
(6, 'Luiz Henrique', 'luiz@gmail.com', '$2y$10$quCPf3Q2cl2FtyNkJfjvDewwzef5Nw9qNCTqqMLWoBMVOVFBw5Gey', '11111111111', 0, 'Mensal', 0, 0, '2019-12-10'),
(7, 'Patricia Gabriela', 'patricia@gmail.com', '$2y$10$3AFQ7ov6uiKk5xuP/167AuJjmOjbwdfmDtP04q2Hk2sgi1XsxQfz2', '11111111111', 0, '1', 0, 0, '2019-08-02'),
(8, 'Rafaela', 'rafaela@gmail.com', '$2y$10$992/riQGvAqbje06IjC/iuFyBptzePGN19ebipi75zW.5JmVDqzTK', '11111111111', 0, '1', 0, 0, '2019-09-13'),
(9, 'Lucia', 'lucia@gmail.com', '$2y$10$iE./4QwoWykMQwqGY5CFDeUFsMNPq30TDjIVtemq5K5nt8Uekq726', '11111111111', 0, 'unitario', 0, 0, '2019-08-15'),
(10, 'Tais', 'tais@yahoo.com', '$2y$10$63icbUhTscBtJAVKyDBYhOKT//9007jwBugHeBg7tkPfW4faYFSxO', '22222222222', 0, 'unitario', 0, 0, '2030-05-25'),
(11, 'Silvia', 'silvia@hotmail.com', '$2y$10$CTTYJm8AfU3ueVZizWzhZuSqJQn5IX858nm6.8Xxp/S9udzB6GseS', '33333333333', 0, 'unitario', 0, 0, '2020-03-01'),
(12, 'Vania', 'vania@ig.com', '$2y$10$u5OeIHldVPXD/Gejggi8BOQemth1XWaI6Hxh84QKu9O3iO7DDvJZ6', '44444444444', 0, 'mensal', 0, 0, '2019-08-02'),
(13, 'erica', 'ericazinha@gmail.com', '$2y$10$uweuDAxbpobbfcwgIs2/1.6NgAq29dEhk.xF3ECZbLv.M.vrsOQl2', '55226688332', 0, 'mensal', 0, 0, '2019-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `usuario_fk` (`usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
