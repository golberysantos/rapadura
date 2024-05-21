
<?php
// https://www.php.net/manual/en/mysqlinfo.api.choosing.php
$host = 'localhost';
$dbname   = 'rapadura';
$user = 'root';
$pwrd = '';
$pdo = new PDO('mysql:host=localhost;dbname=rapadura', $user, $pwrd);


$statement = $pdo->query("INSERT INTO PESSOA (observacao) VALUE ('GOLBERY')");
$statement = $pdo->query("SELECT * FROM pessoa");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo $row['id'];
echo $row['observacao'];
//echo htmlentities($row['observacao']);

foreach ($row as $key => $value) {
    echo $key;
}

?>
<h1><?php echo $row['observacao']; ?></h1>
