-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 04:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eagleuniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `id` int(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `senha`) VALUES
(1, 'Danilo', '123456789'),
(2, 'Adaucto', '123456789'),
(3, 'Rodrigo', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `id` int(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `site` varchar(200) NOT NULL,
  `especialidade` varchar(150) NOT NULL,
  `duracao` varchar(6) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `data` date NOT NULL,
  `situacao` text NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`id`, `nome`, `site`, `especialidade`, `duracao`, `descricao`, `data`, `situacao`, `imagem`) VALUES
(3, 'Formação Front-End', 'https://www.caelum.com.br/formacao-frontend', 'HTML5, CSS3, JavaScript e PHP', '72h', 'A formação frontend é para quem busca desenvolver páginas web com HTML, CSS e Javascript. Para essa formação é necessário saber o básico de criação e edição de arquivos de texto e saber mexer com navegadores.', '2020-06-27', 'Aberto', 'web_design.png'),
(4, 'Python', 'google.com', 'Programação', '120h', 'É uma linguagem de programação', '2020-06-27', 'Aberto', 'python01_200.png'),
(6, 'PHP', 'www.php.net', '200h', '200h', 'É uma linguagem de programação', '2020-06-27', 'Fechado', 'php01_200.png'),
(7, 'FlasK Framework - Python', 'https://flask.palletsprojects.com/en/1.1.x/', 'Programação Web', '72h', 'Flask Framework é um conjunto de códigos reaproveitáveis que auxiliam na criação de sites com a linguagem Python', '2020-06-28', 'Aberto', 'Flask.png'),
(8, 'Webbots Análise de Sites', 'Sem Instituição', 'Desenvolvimento de Bots para a Web', '128h', 'Aprenda sobre webbots, como desenvolvê-los e a aplicá-los aos seus projetos.', '2020-06-28', 'Em preparação', 'webbots.png'),
(9, 'Ruby', 'Sem Instituição', 'Linguagem de Programação Ruby', '230h', 'Aprenda essa linguagem generalista.', '2020-06-28', 'Desconhecido', 'ruby01_200.png'),
(10, 'C# e Orientação a Objetos', 'https://www.caelum.com.br/curso-csharp-orientacao-objetos', 'Programação', '40h', 'A plataforma .NET é uma das mais importantes do mercado atualmente. Com ferramentas sólidas, excelente suporte da Microsoft e recursos avançados, o .NET está hoje no centro de diversas aplicações Web, Desktop e Mobile.', '2020-06-28', 'Aberto', 'csharp.png'),
(11, 'Curso (CSPO) Certified Scrum Product Owner online', 'https://www.caelum.com.br/curso-certified-project-owner', 'Desenvolvimento Ágil', '16h', 'Nesta nova versão do treinamento Certified Scrum Product Owner, que foi atualizada de acordo com os mais recentes objetivos de aprendizagem definidos pela Scrum Alliance, serão apresentadas e praticadas ferramentas que o ajudarão a maximizar o retorno sobre o investimento de seus projetos e produtos através do uso do Scrum; desenvolva suas habilidades de facilitação e negociação, melhorando assim seu relacionamento com equipes e stakeholders; e crie uma mentalidade econômica para a tomada de decisão estratégica nos projetos.', '2020-06-28', 'Aberto', 'scrum.png'),
(12, 'Formação .NET ', 'https://www.caelum.com.br/formacao-dotnet', 'Programação', '80h', 'A formação dotnet é para quem busca aprender desde o básico da linguagem C#, conceitos de orientação a objetos e suas boas práticas. Além disso você também verá ASP.NET MVC para trabalhar na Web e como fazer integração com um framework ORM. Para essa formação é necessário conhecimento básico de desenvolvimento Web, como funciona a Internet e o navegador, o que são páginas Web, HTML.', '2020-06-28', 'Aberto', 'net.png'),
(13, 'Formação Java', 'https://www.caelum.com.br/formacao-java', 'Programação', '112h', 'A formação java é para quem busca aprender desde o básico da linguagem Java até o mundo de Java para Web, com testes, SpringMVC e Maven. Para essa formação é necessário conhecimento básico de desenvolvimento Web, como funciona a Internet e o navegador, o que são páginas Web, HTML.', '2020-06-28', 'Aberto', 'java.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(20) NOT NULL,
  `pseudonimo` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `pseudonimo`, `senha`) VALUES
(1, 'teste1', 'teste1', '123'),
(3, 'Danilo', 'danilohbp', '12345678'),
(4, 'Geraldo Teste', 'geraldo', '123456789'),
(5, 'Maria', 'maria', '123456789'),
(6, 'Luana', 'Luana', '123456789'),
(7, 'Armando', 'armando', '123456789'),
(8, 'Margot Robbie', 'margot', '123456789'),
(9, 'Pelágio', 'pelágio', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
