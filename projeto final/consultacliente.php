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
<body bgcolor="#7FFFD4">
 
<form action="php/crud/inserircliente2.php" method="POST">
  <fieldset> 
    Nome:</br>
    <input type="text" name="cxnome"></br>
    Email:</br>
    <input type="text" name="cxemail"></br>
    Endereço:</br>
    <input type="text" name="cxend"></br>
     Telefone:</br>
    <input type="text" name="cxtel"></br>
    RG:</br>
    <input type="text" name="cxrg"></br>
    CPF:</br>
    <input type="text" name="cxcpf"></br>
    <input type="submit" value="Enviar">
   </fieldset>
  </form> 
    </br>
<fieldset>
<a href="php/crud/listarcliente2.php">Listar Cliente</a> 
    
    <form action="php/crud/buscarcliente2.php" method="post">
        Digite o nome do cliente:..
        <input type="text" name="cxbuscarproduto">
        <button type="submit"> Buscar</button>
    </form> 
    <a href="menuuser.php">Sair</a>
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