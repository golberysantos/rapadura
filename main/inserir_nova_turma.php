<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $projeto=$_POST["projeto"];
  $periodo=$_POST["periodo"];
  $curso=$_POST["curso"];
  $turma=$_POST["turma"];
  $turno=$_POST["turno"];
  $horario=$_POST["horario"];
  $local=$_POST["local"];
  $coordenador=$_POST["coordenador"];
  $sexoc=$_POST["sexoc"];
  $fonec=$_POST["fonec"];
  $professor=$_POST["professor"];
  $sexo1=$_POST["sexop"];
  $fonep=$_POST["fonep"];


  echo $projeto;
  echo $periodo;
  echo $curso;
  echo $turma;
  echo $turno;
  echo "<br>".$horario;
  echo $local;
  echo $coordenador;
  echo $sexoc;
  echo $fonec;
  echo $professor;
  echo $sexop;
  echo $fonep;
  

?>
</BODY>
</HTML>
