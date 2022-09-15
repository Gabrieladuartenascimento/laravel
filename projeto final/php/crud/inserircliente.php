<?php
if ($_POST['cxnome'] !="") {
    include_once 'conexao.php';
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $end = $_POST['cxend'];
    $telefone = $_POST['cxtel'];
    $RG = $_POST['cxrg'];
    $CPF = $_POST['cxcpf'];
    $sq = "insert into tbcliente (nome,email,endereco,telefone,RG,CPF) values 
    ('$nome','$email','$end','$telefone','$RG','$CPF');";
    $query = mysqli_query($conn,$sq);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'dados nao cadastrados';
}


?>
<a href= "../../cadcliente.php">Voltar</a>