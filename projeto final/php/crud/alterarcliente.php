<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcod"];
    $nome = $_POST["cxno"];
    $email = $_POST["cxem"];
    $endereco = $_POST["cxend"];
    $telefone = $_POST["cxte"];
    $RG = $_POST["cxr"];
    $CPF = $_POST["cxcp"];
    $alterar = "
        update tbcliente set
        nome = '$nome',
        email = '$email'
        endereco = '$endereco',
        telefone = '$telefone'
        RG = '$RG',
        CPF = '$CPF',
        where 
        codigo = '$cod';
    ";
    $executar = mysqli_query($conn,$alterar);
    if($alterar)
    {
        echo "Dados Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../menuadm.php'>Voltar</a>";
    }
    else
    {
        echo "Dados não Alterado com sucesso!";
        echo "<br>";
        echo "<a href='../../menuadm.php'>Voltar</a>";
    }



?>