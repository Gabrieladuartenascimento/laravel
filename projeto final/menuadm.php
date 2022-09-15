<?php
    SESSION_START();
    if($_SESSION["usuario"]){
        $user = $_SESSION["usuario"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="php/fonte/estilo.css" rel="stylesheet">
    <title>Document</title>
</head>
<body bgcolor="#E6E6FA">
    <center>
    <h1>Menu do Administrador</h1>
    </center>
   
  <fieldset id="m">
      <center>
    Perfil: <?php echo $user ?> 
  <a href="fimsessao.php">Sair</a><br/>
<br>

<a href="cadcliente.php">Cadastro de Cliente</a><br/>
<a href="cadfuncionario.php">Cadastro de Funcionario</a><br/>
<a href="cadproduto.php">Cadastro de Produto</a><br/>
      </center>
  </fieldset>
   
</body>
</html>
<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../acesso.php'; 
        </script>
        ";
    }

?>