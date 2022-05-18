<?php
include_once "conexao2.php";

$codigo = $_POST['id'];

$sqlDelete = "DELETE FROM cadastro WHERE id = '".$codigo."' ";

if (!mysqli_query($conexao2,$sqlDelete)){
    die('Erro ao cexluir o registro: ' . mysqli_error(($conexao2)));
}

echo "<CENTER>Registro deletado com sucesso.<br></CENTER>";
mysqli_close($conexao2);
?>