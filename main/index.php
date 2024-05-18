<HTML>
<HEAD>
 <TITLE>Cetam Digital</TITLE>
</HEAD>
<BODY>
golbery santos dsfgds
<?
  include "homepagefunction.php";
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
