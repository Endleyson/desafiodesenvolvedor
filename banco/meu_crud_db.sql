
#CRIANDO AS TABELAS DO BANCO
CREATE TABLE `cadastros` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cadastro` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo_cadastro` varchar(11) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT NOW(),
  `data_alterada` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
