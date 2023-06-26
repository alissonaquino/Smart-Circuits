<?php

session_start();
$i = $_GET["i"];
$id = $_GET["id"];

$email = $_SESSION['email'];

include_once 'conexao.php';

$pergunta = $_POST["pergunta"];
$a = $_POST["alta"];
$b = $_POST["altb"];
$c = $_POST["altc"];
$d = $_POST["altd"];
$certa = $_POST["correta"];

$query = "SELECT * FROM quizz WHERE id_quizz = '$id' LIMIT 1";
$dados = mysqli_query($conn, $query);
while($linha = mysqli_fetch_assoc($dados)){
    $tamanho = $linha["tamanho_quizz"];
}

if( (isset($pergunta)) || ($pergunta = "") ){
    $query = "UPDATE pergunta SET pergunta_per = '$pergunta' WHERE id_quizz = $id && posicao_per = '$i' ";
    
    $result = mysqli_query($conn, $query);
}

if( (isset($a)) || ($a = "") ){
    $query = "UPDATE pergunta SET a_per = '$a' WHERE id_quizz = $id && posicao_per = '$i' ";
    
    $result = mysqli_query($conn, $query);
}

if( (isset($b)) || ($b = "") ){
    $query = "UPDATE pergunta SET b_per = '$b' WHERE id_quizz = $id && posicao_per = '$i' ";
    $result = mysqli_query($conn, $query);
}

if( (isset($c)) || ($c = "") ){
    $query = "UPDATE pergunta SET c_per = '$c' WHERE id_quizz = $id && posicao_per = '$i' ";
    $result = mysqli_query($conn, $query);
}

if( (isset($d)) || ($d = "") ){
    $query = "UPDATE pergunta SET d_per = '$d' WHERE id_quizz = $id && posicao_per = '$i' ";
    $result = mysqli_query($conn, $query);
}

if( (isset($d)) || ($d = "") ){
    $query = "UPDATE pergunta SET correta_per = '$certa' WHERE id_quizz = $id && posicao_per = '$i' ";
    $result = mysqli_query($conn, $query);
}

if(isset($_FILES['foto_per'])){
    $extensao = strtolower(substr($_FILES['foto_per']['name'], -4));
    if($extensao != ""){
    $novo_nome = md5(time()) . $extensao;
    }
    $diretorio = "fotoQuizz/" ;
    $file = $_FILES['foto_per'];
    // $file = move('perfilpet', $novo_nome);

    move_uploaded_file($_FILES['foto_per']['tmp_name'], $diretorio.$novo_nome);

    $sql = "UPDATE `pergunta` SET foto_per = '$novo_nome' WHERE id_quizz = '$id' ";
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Deu ruim";
    }


}

$i++;
if($i < $tamanho){
    header("Location: atualizaQuizz.php?i=$i&id=$id");
}else{
    header("Location: quizzes.php");
}
?>