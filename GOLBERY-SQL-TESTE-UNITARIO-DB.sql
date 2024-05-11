
-- -----------------------
-- TESTE UNITÁRIO
-- -----------------------

-- CADA. PESSOA
INSERT INTO PESSOA (id) VALUE (1);
select * from pessoa;

-- CADA. USUARIO
USE rapadura;
-- FALTA ATUALIZAR: (id) AI para, (senha) tipo varchar(255),  
INSERT INTO usuario 
		(idusuario, senha, login, nickname, RI, pessoa_id)
    VALUE
		(1, 123, 'pss1@p.com', 'pss1', '111', 1)
	;
select * from usuario;





















