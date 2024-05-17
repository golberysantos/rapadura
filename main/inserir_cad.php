<HTML>
<HEAD>
 <TITLE></TITLE>
</HEAD>
<BODY>
<?
  include "function_cad.php";
  $nome=$_POST["nome"];
  $rg=$_POST["rg"];
  $cpf=$_POST["cpf"];
  $end=$_POST["end"];
  $bairro=$_POST["bairro"];
  $sexo=$_POST["sexo"];


  echo $nome;
  echo $rg;
  echo $cpf;
  echo $end;
  echo $bairro;
  echo "<br>".$sexo;


?>
</BODY>
</HTML>
