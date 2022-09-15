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
        $funcionario = $_POST["cxbuscafuncionario"];

        $consulta = "select *from tbfuncionario where funcionario LIKE '%$funcionario%' ";

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
                    window.location.href = '../../cadfuncionario.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <div id="cx1"> 
    <form action="alterarfuncionario.php" method="POST">

      Código: </br><input type="text" name="cxcod" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
      Funcionario: </br><input type="text" name="cxfu" value="<?php echo $linha['funcionario'];?>" > <br/>
      Endereço: </br><input type="text"  name="cxen" value="<?php echo $linha['endereco'];?>" > <br/>
      Bairro: </br><input type="text" name="cxba" value="<?php echo $linha['bairro']; ?>" > <br/>
      Cidade: </br><input type="text" name="cxci" value="<?php echo $linha['cidade'];?>" > <br/>
      UF: </br><input type="number"  name="cxuf" value="<?php echo $linha['uf'];?>" > <br/>
      Nome do pai: </br><input type="text" name="cxpai" value="<?php echo $linha['nomedopai']; ?>" > <br/>
      Nome da mãe: </br><input type="text" name="cxmae" value="<?php echo $linha['nomedamae'];?>" > <br/><br/>   

    <button type="submit" style="border:none;background:#fff">
    
    <img src="../../img/bloco.png" width="40" height="30">
            
    </button>  
    
    <a href="excluirfuncionario.php?id=<?php echo $linha['codigo']; ?>">
   <img src="../../img/lixeira.png" width="40" height="30">
   </a>



</form>
  
   
 

   


    </div>  



    <?php } ?>
<a href="../../menuadm.php">Voltar</a>
    </div>    
</body>
</html>