<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcod"];
    $no = $_POST["cxno"];
    $marca = $_POST["cxma"];
    $barra = $_POST["cxba"];
    $qualidade = $_POST["cxqua"];
    $tipo = $_POST["cxti"];
    $preco = $_POST["cxpre"];
    $alterar = "
        update tbproduto set
        nome = '$no',
        marca = '$marca'
        barra = '$barra',
        qualidade = '$qualidade'
        tipo = '$tipo',
        preco = '$preco',
        where 
        codigo = '$cod';
    ";
    $executar = mysqli_query($conn,$alterar);
    if($alterar)
    {
        echo "Dados Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../cadproduto.php'>Voltar</a>";
    }
    else
    {
        echo "Dados não Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../cadproduto.php'>Voltar</a>";
    }



?>