<?php
if ($_POST['cxfuncionario'] !="") {
    include_once 'conexao.php';
    $funcionario = $_POST['cxfuncionario'];
    $endereco = $_POST['cxendereco'];
    $bairro = $_POST['cxbairro'];
    $cidade = $_POST['cxcidade'];
    $uf = $_POST['cxuf'];
    $pai = $_POST['cxpai'];
    $mae = $_POST['cxmae'];
    $sql = "insert into tbfuncionario (funcionario,endereco,bairro,cidade,uf,nomedopai,nomedamae) values 
    ('$funcionario','$endereco','$bairro','$cidade','$uf','$mae','$pai');";
    $query = mysqli_query($conn,$sql);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'dados nao cadastrados';
}


?>
<a href= "../../cadfuncionario.php">Voltar</a>
