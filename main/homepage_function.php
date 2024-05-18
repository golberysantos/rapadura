
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento PHP</title>
</head>
<body>  

<?php
  function homepage_op()
 {echo"
 <form action='menu.php' method='POST'>
  <table border='1' width='100%'>
<tr aling='center'>
  <td> <p align='center'> <img src='image/20070724183431topo2007.jpg' width='770' height='85' border='0'> </p> </td>
</tr>
<tr align='center'>
  <td> <input type='submit' name='op' value='HOME'>&nbsp;
       <input type='submit' name='op' value='Cadastrar'>&nbsp;
       <input type='submit' name='op' value='Listar'>&nbsp;
       <input type='submit' name='op' value='Pesquisar'>&nbsp;
       <input type='submit' name='op' value='Atualizar'>&nbsp;
       <input type='submit' name='op' value='Conteudo'>&nbsp;
       <input type='submit' name='op' value='Apostilas'>&nbsp;</td>
</tr>
</table>
</form>"; }

function homepage()
{ echo" <table border='1' width='100%'>
<tr>
  <td> Alunos 2006 <br>
       Alunos 2007 <br>
       Alunos 2008 <br>
       Meus Arquivos <br>
       <a href='nova_turma.php'>Nova Turma</a><br>
  </td>

  <td> Esta p gina est  em desenvolvimento </td>

  <td> <pre>             <img src='image/bandeira_am.gif' width='120' height='60' border='0'>
             <img src='image/Imag011.jpg' width='120' height='150' border='0'>
             <img src='image/fotos 027.jpg' width='120' height='150' border='0'>
       </pre>

  </td>
</tr>
</table> ";
           }
function senha()
{
  echo"
<form action='nova_turma.php' method='POST'>
      Informe a senha: <input type='password' name='senha' size='20'>
   <input type='submit' name='confirmar' value='Confirmar'>&nbsp;
</form> ";
       }


?>
</BODY>
</HTML>
