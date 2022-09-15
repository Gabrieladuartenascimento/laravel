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
<body bgcolor="#B0C4DE">
  <form action="php/crud/inserirproduto.php" method="POST">
  <fieldset> 
    Nome:</br>
    <input type="text" name="cxno"></br>
    Marca:</br>
    <input type="text" name="cxmarca"></br>
    Barra:</br>
    <input type="text" name="cxbarra"></br>
     Qualidade:</br>
    <input type="text" name="cxqualidade"></br>
    Tipo:</br>
    <input type="text" name="cxtipo"></br>
    Preço:</br>
    <input type="text" name="cxpreco"></br>
    <input type="submit" value="Enviar">
   </fieldset>
  </form> 
    </br>
    <fieldset>
     <a href="php/crud/listarproduto.php">Listar Produto</a> 
    
    <form action="php/crud/buscarproduto.php" method="post">
        Digite o nome do produto:..
        <input type="text" name="cxbuscarproduto">
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