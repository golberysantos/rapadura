-- -----------------------
-- GOLBERY. RAPADURA TESTE UNITÁRIO DB
-- -----------------------
USE rapadura;

-- PESSOA
INSERT INTO PESSOA 
	(observacao) 
VALUE 
	('TESTE'), 
    ('TESTE'),
    ('TESTE'),
    ('TESTE'),
    ('TESTE')   
;

select * from pessoa;

update pessoa
set observacao = 'TESTE PES.1'
where id = 1
;

update pessoa
set observacao = 'TESTE PES.2'
where id = 2
;

update pessoa
set observacao = 'TESTE PES.3'
where id = 3
;

update pessoa
set observacao = 'TESTE PES.4'
where id = 4
;

update pessoa
set observacao = 'TESTE PES.5'
where id = 5
;

delete 
from pessoa
where 
	id = 5;
;
select * from pessoa;


-- TIPOCONTATO
insert into tipocontato
	(nome)
value
	('WPP'), 
    ('CELULAR'), 
    ('E-MAIL'),
    ('SITE'),
    ('INSTAGRAM'),
    ('LINKEDIN'),
    ('TELEGRAM'),
    ('X'),
    ('FACEBOOK'),
    ('COMERCIAL')
;

-- CONTATO
insert into contato
	(valor, pessoa_id, tipo_contato_id)
value
	('ps1@ps.com', 1, 3)
;

insert into contato
	(valor, pessoa_id, tipo_contato_id)
value
	('@ps', 2, 5),
    ('www.ps.com', 3, 4),
    ('9211111111', 4, 1)
;
select * from contato order by id;
delete from contato where id = 4; 







/*
-- CADA. USUARIO

-- FALTA ATUALIZAR: (id) AI para, (senha) tipo varchar(255),  
INSERT INTO usuario 
		(idusuario, senha, login, nickname, RI, pessoa_id)
    VALUE
		(1, 123, 'pss1@p.com', 'pss1', '111', 1)
	;
select * from usuario;

*/



















