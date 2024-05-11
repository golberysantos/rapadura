<HTML>
<HEAD>
 <TITLE>Cadastro</TITLE>
</HEAD>
<BODY>
 <form action='inserir_cad.php' method='POST'>
<?
 echo "

<table  border='1' height='50%' width='100%'>
<tr bgcolor='white'>
    <td>
         <h3> <p align='center'><b> CADASTRO DE ALUNO </b></p> </h3>
    </td>
</tr>

<tr aling='0'>
   <td>
    <table aling='center' border='1' width='95%'>
    <tr>
        <td>Nome: <input type='text' size='53' name='nome'></td>
        <td> RG: <input type='text' size='10' name='rg'>
            CPF: <input type='text' size='10' name='cpf'> </td>
    </tr>
    <tr>
        <td>
            Endereço: <input type='text' size='50' name='end'>
        </td>
        <td>
            Complemento: <input type='text' size='15' name='complemento'>
        </td>
    </tr>
    <tr>
        <td colspan='0'>
            Bairro: <input type='text' size='50' name='bairro'>
        </td>
        <td>
        cep: <input type='text' size='9' name='cep'>
        </td>
    </tr>
    <tr>
         <td colspan='2'>
             <p align='center'>
                M <input type='radio' name='sexo' value='m'>
                F <input type='radio' name='sexo' value='f'>
                Fone: <input type='text' size='8' name='fone'>
                Celular: <input type='text' size='8' name='cel'>
            </p>
         </td>
    </tr>
    <tr>
         <td >

         </td>
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
                   <option>3</option>
                   <option>4</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
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
            </tr>
        <tr>
            <td colspan='2'>
                Local do Curso: <input type='text' size='50' name='local'>
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

</table>   ";

?>
</form>
</BODY>

</HTML>
