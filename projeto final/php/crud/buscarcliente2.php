<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>
    <div id="listar">
    
    <?php
        $nome = $_POST["cxbuscarcliente"];

        $consulta = "select *from tbcliente where nome LIKE '%$nome%' ";

        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        if($resultado != 0)
        {
            echo "<script>alert('Cliente localizado com sucesso!');</script>";
        }
        else
        {
           echo "<script>
                    alert('Cliente não localizado');
                    window.location.href = '../../consultacliente.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <div id="cx1"> 
    <form action="alterarcliente.php" method="POST">

      Código: </br><input type="text" name="cxcod" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Nome: </br><input type="text" name="cxno" value="<?php echo $linha['nome'];?>" > <br/>
       Email: </br><input type="text"  name="cxem" value="<?php echo $linha['email'];?>" > <br/>
      Endereço: </br><input type="text" name="cxend" value="<?php echo $linha['endereco']; ?>" > <br/>
      Telefone: </br><input type="text" name="cxte" value="<?php echo $linha['telefone'];?>" > <br/>
      RG: </br><input type="text"  name="cxr" value="<?php echo $linha['RG'];?>" > <br/>
      CPF: </br><input type="text" name="cxcp" value="<?php echo $linha['CPF']; ?>" > <br/><br/>
      




</form>
  

</div>  



<?php } ?>
<a href="../../consultacliente.php">Voltar</a>
</div>    
</body>
</html>