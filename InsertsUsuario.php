
<?php

if (isset($_POST['submit']))

    if (isset($_POST['tipo'],$_POST['email'], $_POST['senha'])){
 
        include_once('Banco_conexao.php');
  
 $Tipo =  $_POST['tipo'];
 $Email = $_POST['email'];
 $Senha = $_POST['senha'];
 
  $sql = mysqli_query($Conexao, "INSERT INTO Usuario (Tipo, Email, Senha)
  VALUES ('$Tipo','$Email', '$Senha')");
  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Login</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; background-color: #f9f9f9;">

    <h2> Cadastre-se aqui</h2>

    <form action="InsertsUsuario.php" method="post" 
          style="max-width: 350px; margin: auto; padding: 15px; background: white; border-radius: 8px; ">

       
          <label>Tipo de Cadastro</label><br>
        <input type="radio" id="funcionario" name="tipo" value="Funcionario" required>
        <label for="funcionario">Funcionário(a)</label>
       
        <input type="radio" id="cliente" name="tipo" value="Cliente" required>
        <label for="cliente">Cliente</label><br><br>

          <label for="Email">Email:</label><br>
        <input type="email" id="email" name="email" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>
       
       
     <label for="Senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <input type="submit" id="submit" name="submit" value="Cadastrar"
               style="background-color:rgb(32, 201, 71); color: white; padding: 8px 12px; border: none;">
    </form>

</body>
</html>
