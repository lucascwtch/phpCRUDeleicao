<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Deletar Registros</title>
</head>
<body>

<form method="post" name="cadastro" action="delete.php" onSubmit="return enviardados();">
  <fieldset>
    <legend>Deletar!</legend>
    <p>
    <label for="size_1">Id:</label>  
    <input type="text"  name="id" id="id" value="" />
    </p>

    <tr>
    <td>
              <input name="Submit" type="submit" formaction="index.php" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <input name="Ler" type="submit" formaction="select.php" value="Ler"> 
               <input name="Deletar" type="submit" formaction="delete.php" value="Deletar!!"> 
               <input name="Atualizar" type="submit" formaction="update.php" value="Atualizar"> 
            </td>
         </tr>
  </fieldset>
</form>

</body>
</html>