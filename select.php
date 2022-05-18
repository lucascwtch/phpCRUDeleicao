<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
include_once "conexao2.php";
echo "</br></br>";
$sqlSelect = "SELECT id, nome, cpf, email, data, endereco, num_zona, nome_zona, end_zona, sigla_partido, nome_partido, voto FROM cadastro";
$rs = mysqli_query($conexao2, $sqlSelect);

if (mysqli_num_rows($rs) > 0) { 
    while($row = mysqli_fetch_assoc($rs)) {
        echo"<br>". 
            "- Id: " . $row['id']. "<br>".
            " - Nome: " . $row["nome"]. "<br>".
            " - CPF: ". $row['cpf']. "<br>".
            " - Email: " . $row["email"]. "<br>".
            " - Data: " . date("d/m/y",strtotime($row["data"])). "<br>".
            " - Endereço: " . $row["endereco"].  
            "<br>".
            " - Número da Zona Eleitoral: " . $row["num_zona"]. "<br>".
            " - Nome do local: ". $row["nome_zona"]. "<br>".
            " - Endereço do local: ". $row["end_zona"]. 
            "<br>". 
            " - Sigla do Partido: ". $row['sigla_partido']. "<br>".
            " - Nome do Partido: ". $row['nome_partido'].
            "<br>".
            " - SEU VOTO: ". $row['voto']. "<br>".
             "-----------------------XXXXXXXXXXXXXXXXXXXXXX--------------------";
    }
} else {
    echo "Não foram encontrados registros cadastrados";
}

mysqli_close($conexao2);

?>