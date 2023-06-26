<?php
$id = $_GET['id'];

$i = $_GET['i'];

$motivo = $_POST['motivo'];

session_start();

include_once("conexao.php");

$email = $_SESSION['email'];

$sql1 = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($dados) ){
    $idusu = $row['id_usu'];
}

$sql = "SELECT * FROM moderacao WHERE id_usu = '$idusu' && id_quizz = '$id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $result_usuario = "INSERT INTO moderacao (id_quizz, id_usu, motivo_mod) VALUES ('$id', '$idusu', '$motivo')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    header("Location: jogar.php?id=$id&i=$i");

}elseif(isset($resultado)){
    
    header("Location: jogar.php?id=$id&i=$i");

}else{
    echo"Aqui"; 
}


?>