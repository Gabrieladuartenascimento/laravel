<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="php/fonte/estilo.css" rel="stylesheet">
    <title>Document</title>
</head>
<body bgcolor="#E0FFFF">
   
<div id="acesso" >
<form action="php/crud/validar.php" method="POST" id="fo" >
      
     <legend> ADM
      <input type="radio" name="perfil" value="adm" class=""/>
      USER
      <input type="radio" name="perfil" value="user" class="" checked>
     </legend>
        Login:</br>
        <input type="text" name="cxlogin" class="ac"><br/>
        Senha:
</br>
        <input type="password" name="cxsenha" class="ac"></br>
 <input type="submit" value="Acessar" class="b">  
      </form>
</div>
</body>
</html>