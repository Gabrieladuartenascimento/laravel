<?php
    SESSION_START();
    if($_SESSION["usuario"]){
        $usuario = $_SESSION["usuario"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php include_once 'conexao.php';   ?>
<style>
   fieldset{width: 120px; margin: auto;} 
    
</style>
</head>
<body>



    <div id="listar">
    
    <?php
        $consulta = "select *from tbcliente";
        $executar = mysqli_query($conn,$consulta);
        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <fieldset>
      Código:</br><input type="text" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Nome: </br><input type="text" value="<?php echo $linha['nome'];?>" readonly> <br/>
      Email: </br><input type="text"  value="<?php echo $linha['email'];?>" readonly> 
      Endereço: </br><input type="text" value="<?php echo $linha['endereco']; ?>" readonly> <br/>
      Telefone: </br><input type="text" value="<?php echo $linha['telefone'];?>" readonly> <br/>
      RG: </br><input type="text"  value="<?php echo $linha['RG'];?>" readonly> <br/>
      CPF: </br><input type="text" value="<?php echo $linha['CPF'];?>" readonly>     
    </fieldset>
        </br>
<?php } ?>
<a href="../../consultacliente.php">Voltar</a>
    </div>    
</body>
</html>


<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../../consultacliente.php'; 
        </script>
        ";
    }

?>