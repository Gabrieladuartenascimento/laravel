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
        $consulta = "select *from tbfuncionario";
        $executar = mysqli_query($conn,$consulta);
        while ($linha = mysqli_fetch_array($executar)) {
    ?>
      <fieldset>
      Código:</br> <input type="text" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Funcionario:</br> <input type="text" value="<?php echo $linha['funcionario'];?>" readonly> <br/>
      Endereço: </br><input type="text"  value="<?php echo $linha['endereco'];?>" readonly> 
      Bairro: </br><input type="text" value="<?php echo $linha['bairro']; ?>" readonly> <br/>
      Cidade: </br><input type="text" value="<?php echo $linha['cidade'];?>" readonly> <br/>
      UF: </br><input type="number"  value="<?php echo $linha['uf'];?>" readonly> <br/>
      Nome do mae:</br> <input type="text" value="<?php echo $linha['nomedopai']; ?>" readonly> <br/>
      Nome da pai: </br><input type="text" value="<?php echo $linha['nomedamae'];?>" readonly>   
      </fieldset>
        </br>
<?php } ?>
<a href="../../cadfuncionario.php">Voltar</a>
    </div>    
</body>
</html>


<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../../cadfuncionario.php'; 
        </script>
        ";
    }

?>