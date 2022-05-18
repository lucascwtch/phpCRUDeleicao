<?php
include_once "conexao2.php";

$codigo = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];

$num_zona = $_POST['num_zona'];
$nome_zona = $_POST['nome_zona'];
$end_zona = $_POST['end_zona'];

$sigla_partido = $_POST['sigla_partido'];
$nome_partido = $_POST['nome_partido'];

$voto = $_POST['voto'];

$sqlUpdate = "UPDATE cadastro SET nome = '$nome', cpf = '$cpf', email = '$email', data = '$data', endereco = '$endereco', num_zona = '$num_zona', 
nome_zona = '$nome_zona', end_zona = '$end_zona', sigla_partido = '$sigla_partido', nome_partido = '$nome_partido', voto = '$voto' WHERE id = '$codigo' ";

if (!mysqli_query($conexao2,$sqlUpdate)){
    die('Erro ao atualizar o registro: ' . mysqli_error(($conexao2)));
}

echo "<CENTER>Registro atualizado com sucesso!!<br></CENTER>";
mysqli_close($conexao2);
?>