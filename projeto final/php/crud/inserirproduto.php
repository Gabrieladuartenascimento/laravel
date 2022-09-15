<?php
if ($_POST['cxno'] !="") {
    include_once 'conexao.php';
    $no = $_POST['cxno'];
    $marca = $_POST['cxmarca'];
    $barra = $_POST['cxbarra'];
    $qualidade = $_POST['cxqualidade'];
    $tipo = $_POST['cxtipo'];
    $preco = $_POST['cxpreco'];
    $sql = "insert into tbproduto (nome,marca,barra,qualidade,tipo,preco) values 
    ('$no','$marca','$barra','$qualidade','$tipo','$preco');";
    $query = mysqli_query($conn,$sql);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'dados nao cadastrados';
}


?>
<a href= "../../cadproduto.php">Voltar</a>