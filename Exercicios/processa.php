<?php
$nome= $_GET["nome"];   
$codigo=$_GET["codigo"];
$valor=$_GET["valor"];
$descricao=$_GET["descricao"];
$conteudo= $nome." $%&&%$  ".$codigo."  $%&&%$ ".$descricao."  $%&&%$ ". $valor;



$conteudo1 = fopen("cadastro.txt", "w+");
fwrite($conteudo1,$conteudo,);
fclose($conteudo1);
$saida= readfile("cadastro.txt")
?>