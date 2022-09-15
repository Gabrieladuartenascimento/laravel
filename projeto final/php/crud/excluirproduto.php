<?php

include_once 'conexao.php';

$cod = $_GET["id"];

$excluir = "delete from tbproduto where codigo = '$cod'";
$executar = mysqli_query($conn,$excluir);
if($executar)
{
    echo "Cliente excluido com sucesso!";
    echo "<br>";
    echo "<a href='../../cadproduto.php'>Voltar</a>";
} 
else
{
    echo "Cliente não excluido!";
    echo "<br>";
    echo "<a href='../../cadproduto.php'>Voltar</a>";
}

?>