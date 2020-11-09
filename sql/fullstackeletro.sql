create schema fullstackeletro;
use fullstackeletro;

CREATE TABLE produtos (
  idproduto int NOT NULL AUTO_INCREMENT,
  categoria varchar(45) NOT NULL,
  descricao varchar(150) NOT NULL,
  preco decimal(8,2) NOT NULL,
  preco_com_desconto decimal(8,2) NOT NULL,
  imagem varchar(300) DEFAULT NULL,
  PRIMARY KEY (idproduto),
  UNIQUE KEY imagem_UNIQUE (imagem)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE pedidos (
  idpedidos int NOT NULL AUTO_INCREMENT,
  nome_cliente varchar(100) NOT NULL,
  endereco varchar(250) NOT NULL,
  telefone varchar(15) NOT NULL,
  idproduto int NOT NULL,
  valor_unitario decimal(8,2) NOT NULL,
  quantidade int NOT NULL,
  valor_total decimal(8,2) NOT NULL,
  PRIMARY KEY (idpedidos),
  FOREIGN KEY (idproduto) REFERENCES produtos(idproduto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Insert
INSERT INTO produtos
VALUES 
(1,'Geladeira','Geladeira Frost Free Brastemp Side Inverse 540 litros',6839.00,5019.00,'imagens/geladeira_brastemp.jpeg'),
(2,'Geladeira','Geladeira Frost Free Brastemp Branca 375 litros',2068.99,1910.90,'imagens/geladeira_brastemp_branca.jpeg'),
(3,'Geladeira','Geladeira Frost Free Consul Prata 340 Litros',2199.99,2069.00,'imagens/geladeira_consul.jpeg'),
(4,'Fogão','Fogão 4 Bocas Consul Inox com mesa de Vidro',1299.00,1129.00,'imagens/Fog%C3%A3o_inox.jpeg'),
(5,'Fogão','Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático',699.99,519.70,'imagens/fog%C3%A3o_atlas.jpeg'),
(6,'Micro-ondas','Micro-ondas Consul 32 Litros Inox 220V',589.99,409.88,'imagens/microondas_consul.jpg'),
(7,'Micro-ondas','Micro-ondas 25L Espelhado Philco 220V',508.70,464.53,'imagens/microondas_philco.jpeg'),
(8,'Micro-ondas','Forno de Micro-ondas Electrolux 20L Branco',459.99,436.05,'imagens/microondas_electrolux.jpeg'),
(9,'Lavadora de roupas','Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca',1699.00,1214.10,'imagens/maquina_de_lavar_brastemp.jpeg'),
(10,'Lavadora de roupas','Lavadora de Roupas Philco Inverter 12kg',2399.00,2179.90,'imagens/m%C3%A1quina_de_lavar.jpeg'),
(11,'Lava Louças','Lava-Louça Electrolux Inox com 10 Serviços, 06 programas de lavageme Painel Blue Touch',3599.00,2799.90,'imagens/lava_lou%C3%A7a.jpeg'),
(12,'Lava Louças','Lava-Louça Compacta 8 Serviços Branca 127V Brastemp',1970.59,1730.61,'imagens/lava_lou%C3%A7a_brastemp.jpeg');

INSERT INTO pedidos 
VALUES 
(1,'Ana Caran','Avenida Sara Nogueira, 482, Sala C - Assis Brasil, PA / 78462-580','59-07535-1973',1,6839.00,2,13678.00),
(2,'Sergio Matos','Marginal Breno Carvalho, 3014, Bloco D, Apto. 10 - Colina, CE / 26027-054','63-32970-2778',3,2199.00,3,6599.00),
(3,'Aliça Amorim Miguéis','Avenida Antônio Reis, 680, Sala E - Corupá, RJ / 57388-229','12-26031-8024',1,6839.00,5,34195.00),
(4,'Yi Azeredo Lagoa','Ponte Salvador Braga, 709, Sala 6 - Corbélia, AM / 43835-608','33-69479-0483',4,1299.00,3,3897.00),
(5,'Josué Mangueira Pinhal','Rodovia Fabrícia Xavier, 694, Sala 8 - Bagre, RJ / 72004-810','11-37752-9649',6,589.00,5,2949.00),
(6,'Celeste Negreiros Ferraço','Viela Suélen Xavier, 840, Sala 5 - Rio Branco, PB / 16890-201','93-00434-0841',7,508.00,2,1017.00),
(7,'Alberto Gameiro Aquino','Ponte Joana Xavier, 496, Apto. 20 - Brasília, MS / 58888-302','89-61748-3473',8,459.00,3,1379.00),
(8,'Osvaldo Peseiro Inês','Travessa Antônio Carvalho, 51, Apto. 870 - Piraí, MT / 91613-593','40-18252-8070',9,1699.00,2,3398.00),
(9,'Barbara Sales Mourão','Avenida Raul Costa, 173, Apto. 300 - Caririaçu, PB / 63883-878','97-39830-1783',10,2399.00,1,2399.00),
(10,'Túlio Andrade Varanda','Travessa Silas Saraiva, 3489, Sala D - Aperibé, RN / 11803-568','23-53839-3225',12,1970.00,5,9852.00);


-- select
select *
  from produtos;
 
select *
  from pedidos;
  
  
select *
  from pedidos ped
inner join produtos prod
	on ped.idproduto = prod.idproduto
 
 
