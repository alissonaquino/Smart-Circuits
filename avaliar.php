<?php

$id = $_GET['id'];

$estrela = $_GET['estrela'];

session_start();

include_once("conexao.php");

$email = $_SESSION['email'];

$sql1 = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($dados) ){
    $idusu = $row['id_usu'];
}

$sql = "SELECT * FROM avaliacao WHERE id_usu = '$idusu' && id_quizz = '$id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $result_usuario = "INSERT INTO avaliacao (id_quizz, id_usu, avaliacao_ava) VALUES ('$id', '$idusu', '$estrela')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    header("Location: resultado.php?id=$id");

}elseif(isset($resultado)){

   
        $query = "UPDATE avaliacao SET avaliacao_ava = '$estrela' WHERE id_quizz = '$id' && id_usu = '$idusu' ";
    $result = mysqli_query($conn, $query);

    
    header("Location: resultado.php?id=$id");

}else{
    echo"Aqui"; 
}



?>