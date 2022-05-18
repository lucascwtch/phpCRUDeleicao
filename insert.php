<?php

require_once "conexao2.php";


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];

$num_zona = $_POST['num_zona'];
$nome_zona = $_POST['nome_zona'];
$end_zona = $_POST['end_zona'];

$sigla_partido = $_POST['sigla_partido'];
$nome_partido = $_POST['nome_partido'];

$voto = $_POST['voto'];

$sqlInsert = "INSERT INTO cadastro (nome, cpf, email, data, endereco, num_zona, nome_zona, end_zona, sigla_partido, nome_partido, voto) VALUES 
('$nome', '$cpf', '$email', '$data', '$endereco', '$num_zona', '$nome_zona', '$end_zona', '$sigla_partido', '$nome_partido', '$voto')";

$rs = mysqli_query($conexao2,$sqlInsert) or die ("Erro ao cadastrar dados");
echo "Dados cadastrados com sucesso!!";

?>