<HTML>
<HEAD>
 <TITLE>Cetam Nova Turma</TITLE>
</HEAD>
<BODY>
<?
  include "homepage_function.php";
  homepage_op();
  senha();

  $senha=$_POST["senha"];

  if($senha==" "){
  echo" ";
}
else if(($senha!="1805570G")&& ($senha!=" ")){
echo " Senha incorreta. Tente novamente.";}


  if($senha=="1805570G"){
  function nova_turma(){
  echo "
 <form action='inserir_nova_turma.php' method='POST'>
<table  border='1' height='50%' width='100%' aling='center'>
<tr bgcolor='white'>
    <td>
         <h3> <p align='center'><b> NOVA TURMA </b></p> </h3>
    </td>
</tr>

<tr>
   <td>
    <table align='center' border='1' width='95%'>
   <tr>
    <td colspan='0'>
        Projeto: <select name='projeto' size='1'>
                        <option> ---- </option>
                        <option>Inclusão Digital</option>
                        <option>Projeto Cidadão</option>
                 </select> &nbsp;
        <td>
    </tr>

    <tr>
        <td colspan='2'>

        Período: <input type='text' size='2' name='dd' value='dd'>/
                 <input type='text' size='2' name='mm' value='mm'>/
                 <input type='text' size='2' name='aa' value='aa'>&nbsp;
                 <b>a</b> &nbsp;<input type='text' size='2' name='dd1' value='dd'>/
                 <input type='text' size='2' name='mm1' value='mm'>/
                 <input type='text' size='2' name='aa1' value='aa'> &nbsp;
        Curso: <select name='curso' size='1'>
                   <option>------------</option>
                   <option>Informática Básica</option>
                   <option>Informática Avançada</option>
                   <option>Designer</option>
                   <option>Inglês</option>
                   <option>Espanhou</option>
                </select>
                    </td>
        </tr>
        <tr>
        <td colspan='2'>Turma: <select name='turma' size='1'>
                   <option>----</option>
                   <option>1</option>
                   <option>2</option>
                   <option>A</option>
                   <option>B</option>
                   <option>D</option>
                   <option>E</option>
                   </select>
         Turno: <select name='turno' size='1'>
                   <option>----------</option>
                   <option>Matutino</option>
                   <option>Intermediário</option>
                   <option>Vespertino</option>
                   <option>Noite</option>
                   </select>
         Horário: <select name='horario' size='1'>
                   <option>------------</option>
                   <option>08:00 as 10:00</option>
                   <option>10:00 as 12:00</option>
                   <option>11:00 as 13:00</option>
                   <option>14:00 as 16:00</option>
                   <option>14:00 as 15:30</option>
                   <option>15:45 as 17:15</option>
                   <option>16:00 as 18:00</option>
                   <option>18:00 as 20:00</option>
                   <option>20:00 as 22:00</option>
                   </select>

             Local <select size='1' name='local'>
                   <option>  ------- </option>
                   <option>CCTM</option>
                   <option>IBC</option>
                   <option>Prato Cidadão São José</option>
                   <option>Prato Cidadão Jorge Teixeira</option>
                   </select>
            </td>
    </tr>
    <tr>
        <td colspan='2'>
            Coordenador: &nbsp<input type='text' size='50' name='coordenador'> &nbsp&nbsp
            M <input type='radio' name='sexoc' value='m'> &nbsp
            F <input type='radio' name='sexoc' value='f'> &nbsp &nbsp
            Fone: <input type='text' size='8' name='fonec'> &nbsp &nbsp &nbsp
        </td>
            
    </tr>
    <tr>
        <td colspan='2'>
            Professor(a): &nbsp &nbsp<input type='text' size='50' name='professor'> &nbsp&nbsp
            M <input type='radio' name='sexop' value='m'> &nbsp
            F <input type='radio' name='sexop' value='f'> &nbsp &nbsp
            Fone: <input type='text' size='8' name='fonep'> &nbsp &nbsp &nbsp
        </td>

    </tr>
</table>
     <p align='center'>
        <input type='submit' name='enviar' value='Enviar>>':>
        <input type='reset' value='Limpar>>':>
     </p>

</table>
</form> ";  }
nova_turma(); }




?>
</BODY>
</HTML>
