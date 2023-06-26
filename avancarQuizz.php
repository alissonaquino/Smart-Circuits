<?php
session_start();

include_once("conexao.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
$idusu = $row['id_usu'];

}

$tamanho = $_POST["tamanho"];

$dificuldade = $_POST["dificuldade"];

$assunto = $_POST["assunto"];

$result_quizz = "INSERT INTO quizz (tamanho_quizz, dificuldade_quizz, assunto_quizz, id_usu) VALUES ('$tamanho', '$dificuldade', '$assunto', '$idusu')";

$resultado_quizz = mysqli_query($conn, $result_quizz);

if(mysqli_insert_id($conn) )
{
    $query =  "SELECT * FROM quizz ORDER BY id_quizz DESC LIMIT 1";
    $dados = mysqli_query($conn, $query);
    while($linha = mysqli_fetch_assoc($dados)){
        $_SESSION["id_quizz"] = $linha["id_quizz"];
        $_SESSION["tamanho"] =  $linha["tamanho_quizz"];
    }
   

header("Location: perguntaQuizz.php?i=1");

}else{
echo"Deu ruim fi";
}

?>