<?php
session_start();
include_once "conexao.php";

if( (isset($_POST['email'])) && (isset($_POST['senha'])) ){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $sql = "SELECT * FROM usuario WHERE email_usu = '$email' && senha_usu = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    while($resultado = mysqli_fetch_assoc($result) ){
    $tipo = $resultado['tipo_usu'];
    }

    $sql = "SELECT * FROM usuario WHERE email_usu = '$email' && senha_usu = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if(empty($resultado)){
        header("Location: perfil2.php");
    }elseif(isset($resultado) && $tipo == 0){
        $_SESSION['email'] = $email;
        header("Location: perfil2.php");

    }elseif(isset($resultado) && $tipo == 1){
        $_SESSION['email'] = $email;
        header("Location: admBusQuizz.php");

    }else{
        header("Location: perfil2.php");
    }
    
}else{
    echo"Cade os dados ?";
}

?>