<?php
    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $user = $_SESSION["usuario"];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    fieldset{width:100px;margin:auto;}
   </style>
    <title>Document</title>
</head>
<body bgcolor="#ADD8E6">
  <form action="php/crud/inserirfuncionario.php" method="POST">
  <fieldset> 
    Funcionario:</br>
    <input type="text" name="cxfuncionario"></br>
    Endereco:</br>
    <input type="text" name="cxendereco"></br>
    Bairro:</br>
    <input type="text" name="cxbairro"></br>
     Cidade:</br>
    <input type="text" name="cxcidade"></br>
    UF:</br>
    <input type="number" name="cxuf"></br>
    Nome do pai:</br>
    <input type="text" name="cxpai"></br>
    Nome da mae:</br>
    <input type="text" name="cxmae"></br>
    <input type="submit" value="Enviar">
   </fieldset>
  </form> 
  </br></br>
  <fieldset>
     <a href="php/crud/listarfuncionario.php">Listar Funcionario</a> 
    
    <form action="php/crud/buscarfuncionario.php" method="post">
        Digite o nome do funcionario:..
        <input type="text" name="cxbuscafuncionario">
        <button type="submit"> Buscar</button>
    </form> 
    <a href="fimsessao.php">Sair</a>
  </fieldset>
</body>
</html>
<?php
}
else
{
    echo "<script>
       window.location.href ='acesso.php'; 
    </script>
    ";
}
