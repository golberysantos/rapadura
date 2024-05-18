<?php
// https://www.php.net/manual/en/mysqlinfo.api.choosing.php
$host = 'localhost';
$dbname   = 'rapadura';
$user = 'root';
$pwrd = '';
$pdo = new PDO('mysql:host='+$hostname+';dbname='+$dbname+'', $user, $pwrd);
$statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['_message']);

?>