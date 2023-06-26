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

    $query = "UPDATE quizz SET desabilitar_quizz = '1' WHERE id_quizz = $id ";
    
    $result = mysqli_query($conn, $query);

    $query = "UPDATE pergunta SET desabilitar_per = '1' WHERE id_quizz = $id ";
    
    $result = mysqli_query($conn, $query);

    header("Location: admBusQuizz.php?id=$id");


?>