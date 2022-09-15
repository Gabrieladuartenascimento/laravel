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
        $no = $_POST["cxbuscarproduto"];

        $consulta = "select *from tbproduto where nome LIKE '%$no%' ";

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
                    window.location.href = '../../cadproduto.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <div id="cx1"> 
    <form action="alterarproduto.php" method="POST">

      Código: </br><input type="text" name="cxcod" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Nome: </br><input type="text" name="cxno" value="<?php echo $linha['nome'];?>" > <br/>
      Marca: </br><input type="text"  name="cxma" value="<?php echo $linha['marca'];?>" > <br/>
      Barra: </br><input type="text" name="cxba" value="<?php echo $linha['barra']; ?>" > <br/>
      Qualidade: </br><input type="text" name="cxqua" value="<?php echo $linha['qualidade'];?>" > <br/>
      Tipo: </br><input type="text"  name="cxti" value="<?php echo $linha['tipo'];?>" > <br/>
      Preço: </br><input type="text" name="cxpre" value="<?php echo $linha['preco']; ?>" > <br/><br/>
      

    <button type="submit" style="border:none;background:#fff">
    
    <img src="../../img/bloco.png" width="40" height="30">
            
    </button>  
    
    <a href="excluirproduto.php?id=<?php echo $linha['codigo']; ?>">
   <img src="../../img/lixeira.png" width="40" height="30">
   </a>



</form>
  
   
 

   


    </div>  



    <?php } ?>
<a href="../../menuadm.php">Voltar</a>
    </div>    
</body>
</html>