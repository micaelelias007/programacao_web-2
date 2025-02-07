<?php
$BD_server = "localhost";
$BD_usuario = "root";
$BD_senha = "";
$BD_nome = "padaria_imperio";


$Conexao = new mysqli($BD_server, $BD_usuario, $BD_senha, $BD_nome);

//if($Conexao -> connect_errno){

// echo "Falha ao se conectar ao banco";

//}else
//{
 //  echo "Você está conectado ao banco!!";
//}


?>