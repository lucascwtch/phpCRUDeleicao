<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Atividade 10/05</title>
</head>

<body>
<form method="post" name="Cadastro" action="insert.php" onSubmit="return enviardados();">
   <center><h1>Eleições</h1></center>
   <fieldset>
    <p>
    <label for="size_1">Código:</label>  
    <input type="text" name="id" id="id" value="" />
    </p>
   </fieldset>
  <fieldset>
    <legend>Área do Candidato:</legend>
    <p>
    <label for="size_1">Atualizar Nome Completo:</label>  
    <input type="text" name="nome" id="nome" value="" />
    </p>
    <p>
    <label for="size_1">Atualizar CPF:</label>  
    <input type="text" name="cpf" id="cpf" value="" />
    </p>
    <p>
    <label for="size_1">Atualizar E-mail:</label>  
    <input type="text" name="email" id="email" value="" />
    </p>
    <tr><td>
    <label for="size_1">Atualizar Data:</label>  
     <font size="2">
     <input name="data" type="date" id="data" class="formbutton">
     </font>
    </td></tr>
    <p>
    <label for="size_1">Atualizar Endereço:</label>  
    <input type="textarea" name="endereco" id="endereco" value="" />
   </p>

  </fieldset>
  <fieldset>
  <legend>Editar Zona Eleitoral</legend>
   <p>
    <label for="size_1">Atualizar Número da Zona Eleitoral:</label>  
    <input type="text" name="num_zona" id="num_zona" value="" />
   </p>
   <p>
    <label for="size_1">Atualizar Nome do local:</label>  
    <input type="text" name="nome_zona" id="nome_zona" value="" />
   </p>
   <p>
    <label for="size_1">Atualizar Endereço:</label>  
    <input type="textarea" name="end_zona" id="end_zona" value="" />
   </p>

  </fieldset>
  <fieldset>
     <legend>Editar Partidor</legend>
     <p>
    <label for="size_1">Atualizar Sigla do partido:</label>  
    <input type="text" name="sigla_partido" id="sigla_partido" value="" />
   </p>
   <p>
    <label for="size_1">Atualizar Nome do partido:</label>  
    <input type="text" name="nome_partido" id="nome_partido" value="" />
   </p>
  </fieldset>
   <fieldset>
   <legend>Editar Candidato</legend>
   <p>
    <label for="size_1">Atualizar o Voto:</label>  
    <input type="text" name="voto" id="voto" value="" />
   </p>
   </fieldset>
   <center>
   <tr>
            <td height="22"></td>
            <td>
               <input name="Submit" type="submit" formaction="index.php" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <input name="Ler" type="submit" formaction="select.php" value="Ler"> 
               <input name="Deletar" type="submit" formaction="deletar.php" value="Deletar"> 
               <input name="Atualizarac" type="submit" formaction="update_n.php" value="Atualizar!"> 

            </td>
         </tr>
   </center>
</form>

</body>
</html>