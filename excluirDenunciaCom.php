<?php
session_start();
$email = $_SESSION['email'];

include_once 'conexao.php';

$id = $_GET["id"];


    $query = "DELETE FROM `comentario` WHERE `id_com` = '$id'";
    
    $result = mysqli_query($conn, $query);

    $sql = "DELETE FROM `moderacao` WHERE `id_com` = '$id' ";

    $result = mysqli_query($conn, $sql);

    header("Location: admModCom.php");


?>