<?php
  
  $nickname=$_POST["nickname"];
  $ri=$_POST["ri"];
  $senha=$_POST["senha"];
  $observacao=$_POST["observacao"];

  echo "<br> E-mail: ".$nickname;
  echo "<br> R.I: ".$ri;
  echo "<br> Senha: ".$senha;
  echo "<br> Observação: ".$observacao;
    
  $cnx = ConectarBD();
  $ok = Criar($nickname, $ri, $senha, $observacao, $cnx);

  if ($ok){
     print "\nUsuário cadastrado com suceso! </br>";
     Listar($cnx);
  }else {
    print "\nDesculpe! Houve erro de persistência.";
  }


  function Criar($nickname, $ri, $senha, $observacao, $cnx)
  {
      
      $ok = false;
      
     
      try {
          $cnx->beginTransaction();

          $ok = $cnx->query("INSERT INTO pessoa(observacao) VALUE ('".$observacao."')");
          $pessoa_id = $cnx->lastInsertId();
          
          $ok = $cnx->query("INSERT INTO usuario(senha, nickname, ri,pessoa_id) VALUE ('".$senha."','".$nickname."','".$ri."','".$pessoa_id."')");
          
          $cnx->commit();

          return $ok;
          
      } catch (\Throwable $e) {
          $cnx->rollback();
          print "Error!: " . $e->getMessage() . "</br>";
      }
  }

  function ConectarBD()
    {
        // https://www.php.net/manual/en/mysqlinfo.api.choosing.php
        $host = 'localhost';
        $dbname   = 'rapadura';
        $user = 'root';
        $pwrd = '';
        
        try {
            $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname."", $user, $pwrd);
        } catch (PDOException $e) {
            print " <h6>Desculpe. Houve erro de conexão com o banco de dados.<h6/>".$e;
            $pdo = null;
        }

        return $pdo;
    }

    function Listar($cnx)
    {
        $pessoa = $cnx->query("SELECT * FROM usuario");
        $row = $pessoa->fetch(PDO::FETCH_ASSOC);

        foreach ($pessoa as $row) {
            print "<h1>" . $row["nickname"] . " | " . $row["ri"] . "<h1/>";
        }
    }


?>