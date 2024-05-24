<?php

class Fisica
{

    public function Criar()
    {
        $cnx = Conexao::ConectarBD();
        $pessoa = $cnx->query("INSERT INTO  pessoa");

        $row = $pessoa->fetch(PDO::FETCH_ASSOC);

        //$users = $dbh->query($sql);
        foreach ($pessoa as $row) {
            print "<h6>" . $row["observacao"] . "<h6/>";
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
