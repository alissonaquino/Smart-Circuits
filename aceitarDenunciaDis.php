<?php
session_start();
$email = $_SESSION['email'];

include_once 'conexao.php';

$id = $_GET["id"];


    $sql = "DELETE FROM `moderacao` WHERE `id_dis` = '$id' ";

    $result = mysqli_query($conn, $sql);

    header("Location: admModDis.php");


?>