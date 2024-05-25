<?php

class UsuarioM
{

    public function Criar($nickname, $ri, $senha, $observacao)
    {
        
        $ok = false;
        $cnx = Conexao::ConectarBD();
        try {

            $cnx->beginTransaction();

            $stmt = $cnx->prepare("INSERT INTO pessoa(observacao) VALUE ($observacao)");
            $pessoa_id = $stmt->lastInsertId();

            $ok = $cnx->query("INSERT INTO usuario(senha, nickname, ri,) VALUE (".$senha.",".$nickname.",".$ri.",".$pessoa_id.")");
            
            $cnx->commit();

            return $ok;
            
        } catch (\Throwable $e) {
            $cnx->rollback();
            print "Error!: " . $e->getMessage() . "</br>";
        }
    }

    public function Listar($id)
    {
        $cnx = Conexao::ConectarBD();
        $pessoa = $cnx->query("SELECT * FROM pessoa");
        $row = $pessoa->fetch(PDO::FETCH_ASSOC);

        foreach ($pessoa as $row) {
            print "<h6>" . $row["observacao"] . "<h6/>";
        }
    }
}

$us = new UsuarioM;
echo "fafdas";
