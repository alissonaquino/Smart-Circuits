<?php


session_start();


$email = $_SESSION['email'];

include_once 'conexao.php';

$sobre = $_POST["sobre"];

if( (isset($sobre)) || ($sobre = "") ){
    $query = "UPDATE usuario SET sobre_usu = '$sobre' WHERE email_usu = '$email'  ";
    
    $result = mysqli_query($conn, $query);
}

    header("Location: perfil2.php");

?>
