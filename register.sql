-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2021 às 14:05
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `donation_interval` varchar(30) NOT NULL,
  `donation_amount` varchar(100) NOT NULL,
  `form_of_payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `cpf`, `phone`, `birth_date`, `address`, `registration_date`, `donation_interval`, `donation_amount`, `form_of_payment`) VALUES
(1, 'Andre De Lucca', 'andre.delucca80@gmail.com', '2147483647', '2147483647', '0000-00-00', 'rua joaquim novaes, 510', '2021-02-11', 'semestral', '100,00', 'débito'),
(2, 'Andre De Lucca', 'anre.delucca80@gmail.com', '22128168805', '11950767753', '1980-07-02', 'Rua Joaquim Novaes, 510', '2021-02-11', 'Semestre', '100,00', 'Débito'),
(4, 'André Vicino De Lucca', 'andre.delucca80@gmail.com', '221.281.688-05', '11 95076-7753', '1980-07-02', 'Rua Joaquim Noves, 510', '2021-02-12', 'semestral', '110,00', 'debito'),
(5, 'nailton mauricio', 'nailtonmauricio@hotmail.com', '058.827.014-81', '83 993348244', '2021-02-12', 'rua texas, 85', '2021-02-12', 'Único', '85,00', 'Crédito'),
(6, 'josiane aparecida da silva camargo', 'josi.camargo@hotmail.com', '343.269.578-08', '11 976908114', '1985-10-03', 'rua joaquim novaes, 510', '0000-00-00', 'Único', '180,00', 'Débito'),
(7, 'josiane camargo', 'josi@gmail.com', '343.269.578-08', '11 97690811', '2021-02-12', 'rua joaquim novaes, 510', '2021-02-12', 'Único', '152,00', 'Débito'),
(8, 'Ricardo Augusto', 'ricardo.augusto@gmail.com', '856.875.221-85', '81 952314785', '1983-08-03', 'Rua Desabafo, 85', '2021-02-14', 'Único', '253,00', 'Débito'),
(9, 'Jonatas Viera Melo', 'jon@tesla.com.br', '254.368.895-21', '11 985642235', '1978-05-11', 'Rua Taboão, 1254', '2021-02-14', 'Bimestral', '200,00', 'Débito'),
(10, 'Tomas de Aquino', 'taquino@teste.com.br', '245.698.475-02', '13 978541112', '1945-11-05', 'Rua da Orla, 852', '2021-02-14', 'Semestral', '54,00', 'Crédito'),
(11, 'Joao da Silva Pato', 'joaosp@gmail.com', '232.124.585-69', '14 978785423', '1965-12-10', 'Rua Avante, 89', '2021-02-14', 'Único', '78,00', 'Crédito');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
