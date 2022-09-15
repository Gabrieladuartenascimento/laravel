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
    <link href="php/fonte/estilo.css" rel="stylesheet">
    <style>
    fieldset{width:180px;margin:auto;}
   </style>
    <title>Document</title>
</head>
<body bgcolor="	#87CEFA">
  <form action="php/crud/inserircliente.php" method="POST" id="p">
  <fieldset id="c"> 
    Nome:</br>
    <input type="text" name="cxnome" class="d" ></br>
    Email:</br>
    <input type="text" name="cxemail"class="d"></br>
    Endereço:</br>
    <input type="text" name="cxend" class="d"></br>
     Telefone:</br>
    <input type="text" name="cxtel" class="d"></br>
    RG:</br>
    <input type="text" name="cxrg" class="d"></br>
    CPF:</br>
    <input type="text" name="cxcpf" class="d"></br>
    <input type="submit" value="Enviar">
   </fieldset>
  </form> 
    </br></br>
   <fieldset>
     <a href="php/crud/listarcliente.php">Listar Cliente</a> 
    
    <form action="php/crud/buscarcliente.php" method="post">
        Digite o nome do cliente:..</br>
        <input type="text" name="cxbuscarcliente">
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
       window.location.href ='menuadm.php'; 
    </script>
    ";
}