<?php
class Conexao
{
    public static function ConectarBD()
    {
        // https://www.php.net/manual/en/mysqlinfo.api.choosing.php
        $host = 'localhost';
        $dbname   = 'rapadura';
        $user = 'root';
        $pwrd = '';

        try {
            $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . '', $user, $pwrd);
        } catch (PDOException $e) {
            print "<h6>Desculpe. Houve erro de conexão com o banco de dados.<h6/>";
            $pdo = null;
        }

        return $pdo;
    }

}