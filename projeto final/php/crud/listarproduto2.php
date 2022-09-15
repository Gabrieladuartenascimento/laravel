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
        $consulta = "select *from tbproduto";
        $executar = mysqli_query($conn,$consulta);
        while ($linha = mysqli_fetch_array($executar)) {
    ?>
      <fieldset>
      Código: </br><input type="text" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Nome: </br><input type="text" value="<?php echo $linha['nome'];?>" readonly> <br/>
      Marca: </br><input type="text"  value="<?php echo $linha['marca'];?>" readonly> 
      Barra: </br><input type="text" value="<?php echo $linha['barra']; ?>" readonly> <br/>
      Qualidade: </br><input type="text" value="<?php echo $linha['qualidade'];?>" readonly> <br/>
      Tipo: </br><input type="text"  value="<?php echo $linha['tipo'];?>" readonly> <br/>
      Preço: </br><input type="text" value="<?php echo $linha['preco'];?>" readonly>     
      </fieldset>
        </br>
<?php } ?>
<a href="../../consultaproduto.php"> Voltar</a>
    </div>    
</body>
</html>

<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../../consultaproduto.php'; 
        </script>
        ";
    }

?>