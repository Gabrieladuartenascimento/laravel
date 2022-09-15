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
<body bgcolor="#FFC0CB">
     <fieldset>
     <a href="php/crud/listarproduto2.php">Listar Produto</a> 
    
    <form action="php/crud/buscarproduto2.php" method="post">
        Digite o nome do produto:..
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