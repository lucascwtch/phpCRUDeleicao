<?php 
define('HOST', 'localhost');
define('USUARIO','id18842388_cwtch');
define('SENHA','a4x2w[RL_y)AtG23');
define('DB','id18842388_eleicao');

$conexao2 = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
echo 'A sua conexão foi efetuada com sucesso!';
?>
