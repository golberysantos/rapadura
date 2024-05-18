<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapadura</title>
</head>
<body>  
golbery santos
<?
  include "localhost/rapadura/main/homepagefunction.php";
  homepage_op();
  $op=$_POST["op"];
  echo $op;
  switch($op)
  { case "HOME":
         homepage();
         break;
    case "Cadastrar":
         include "cad_aluno.php";
         break;
    case "Listar":

         break;

     default:
     echo "erro";
  }

?>

<!--<input type="button" onclick="history.go(-1)" value="<<Voltar"> -->
</BODY>
</HTML>
