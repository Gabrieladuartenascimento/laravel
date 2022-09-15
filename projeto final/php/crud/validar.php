<?php
    
    SESSION_START();
    $login = isset($_POST["cxlogin"])?strtolower($_POST["cxlogin"]):"";
    $senha = isset($_POST["cxsenha"])?md5($_POST["cxsenha"]):"";
    $perfil = isset($_POST["perfil"])?strtolower($_POST["perfil"]):"";
    include_once 'conexao.php';
 
    $log = mysqli_query($conn,
    "select *from tbusuario where usuario='$login' 
    and senha = '$senha' and perfil = '$perfil' ") or die;
    
   
    $linha = mysqli_fetch_array($log);


    if($login == "" || $senha == "")
    {echo "Acesso restrito, efetue o login!";}
    
    if($login!=$linha["usuario"] && $senha != $linha["senha"])
    { echo "Acesso restrito, efetue o login!"; }
     
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "adm")
    {
        $_SESSION["usuario"]=$linha["nomeusuario"];
        echo "
            <script>
                window.location.href = '../../menuadm.php';
            </script>
        ";
    }

    if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "user")
    {
        $_SESSION["usuario"]=$linha["nomeusuario"];
        echo "
            <script>
                window.location.href = '../../menuuser.php';
            </script>
        ";
    }
    else
    {
        echo "<script>
                alert('Acesso negado!');
                window.location.href = '../../acesso.php';
            </script>";
    }


?>