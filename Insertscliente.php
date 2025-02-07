
<?php

if (isset($_POST['submit']))

    if (isset($_POST['nome'], $_POST['sexo'], $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'])) {
 
        include_once('Banco_conexao.php');
  
 
 $Nome = $_POST['nome'];
 $Sexo = $_POST['sexo'];
 $Rua = $_POST['rua'];
 $Numero = $_POST['numero']; 
 $Bairro = $_POST['bairro'];
 $Cidade =$_POST['cidade'];
  $sql = mysqli_query($Conexao, "INSERT INTO Cliente( Nome, Sexo, Rua, Numero, Bairro, Cidade)
  VALUES ('$Nome', '$Sexo', '$Rua', $Numero, '$Bairro', '$Cidade')");
  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; background-color: #f9f9f9;">

    <h2> Cadastro Clientes</h2>

    <form action="Insertscliente.php" method="post" 
          style="max-width: 350px; margin: auto; padding: 15px; background: white; border-radius: 8px; ">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <label>Sexo:</label><br>
        <input type="radio" id="masculino" name="sexo" value="Masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
        <label for="feminino">Feminino</label><br><br>

        <label for="rua">Rua:</label><br>
        <input type="text" id="rua" name="rua" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <label for="numero">Número:</label><br>
        <input type="number" id="numero" name="numero" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required style="width: 90%; padding: 5px; margin: 5px 0;"><br>

        <input type="submit" id="submit" name="submit" value="Cadastrar"
               style="background-color: #28a745; color: white; padding: 8px 12px; border: none;">
    </form>

</body>
</html>
