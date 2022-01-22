create database Cadastro;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idade` int,
  `username` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	INSERT INTO `usuario` (`nome`, `cpf`, `data_nasc`, `cep`, `endereco`, `telefone`, `email`, `idade`, `username`, `senha`) VALUES
	('Admin', '12345678910', '2019-04-10', '32450000', 'Rua Teste 2 N teste 2 Bairro Teste 2 Cidade Teste2', '3199999999', 'admin@testewegrew.com','3','admin','12345');

	SELECT * FROM usuario WHERE username = 'admin' AND senha = '12345';