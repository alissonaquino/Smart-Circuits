<?php
session_start();
$email = $_SESSION['email'];

include_once 'conexao.php';

$id = $_GET["id"];

$query = "SELECT * FROM quizz WHERE id_quizz = '$id' LIMIT 1";
$dados = mysqli_query($conn, $query);
while($linha = mysqli_fetch_assoc($dados)){
    $tamanho = $linha["tamanho_quizz"];
}
    
    $result = mysqli_query($conn, $query);

    $sql = "DELETE FROM `moderacao` WHERE `id_quizz` = '$id' ";

    $result = mysqli_query($conn, $sql);

    header("Location: admModQuizz.php");


?>