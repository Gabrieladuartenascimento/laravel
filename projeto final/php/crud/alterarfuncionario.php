<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcod"];
    $funcionario = $_POST["cxfu"];
    $endereco = $_POST["cxen"];
    $bairro = $_POST["cxba"];
    $cidade = $_POST["cxci"];
    $uf = $_POST["cxuf"];
    $pai = $_POST["cxpai"];
    $mae = $_POST["cxmae"];
    $alterar = "
        update tbfuncionario set
        funcionario = '$funcionario',
        endereco = '$endereco'
        bairro = '$bairro',
        cidade = '$cidade'
        uf = '$uf',
        nomedopai = '$pai'
        nomedamae = '$mae',
        where 
        codigo = '$cod';
    ";
    $executar = mysqli_query($conn,$alterar);
    if($alterar)
    {
        echo "Dados Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../cadfuncionario.php'>Voltar</a>";
    }
    else
    {
        echo "Dados não Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../cadfuncionario.php'>Voltar</a>";
    }



?>
