<?php

class Fisica
{

    public function Criar($observacao, $cpf, $nome, $sobrenome, $nascimento,)
    {
        
        $ok = false;
        $cnx = Conexao::ConectarBD();
        try {

            $cnx->beginTransaction();

            $stmt = $cnx->prepare("INSERT INTO pessoa(observacao) VALUE ($observacao)");
            $ultimoId = $cnx->lastInsertId();

            $ok = $cnx->query("INSERT INTO fisica(observacao) VALUE ($observacao)");
            
            $cnx->commit();
            
        } catch (\Throwable $e) {
            $cnx->rollback();
            print "Error!: " . $e->getMessage() . "</br>";
        }
    }

    public function Listar()
    {
        $cnx = Conexao::ConectarBD();
        $pessoa = $cnx->query("SELECT * FROM pessoa");
        $row = $pessoa->fetch(PDO::FETCH_ASSOC);

        foreach ($pessoa as $row) {
            print "<h6>" . $row["observacao"] . "<h6/>";
        }
    }
}
