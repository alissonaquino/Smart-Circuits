<?php
include "conexao.php";

$nome = $_POST['nome_usu'];
$email = $_POST['email_usu'];
$senha = $_POST['senha_usu'];

$senhaCodificada = md5($senha);



$sql = "INSERT INTO `usuario`(`nome_usu`, `email_usu`,  `tipo_usu`, `senha_usu`) VALUES ('$nome','$email', 1,'$senhaCodificada')";

if (mysqli_query($conn, $sql) ){
    header('Location: admCadasAdm.php');
}else{
    echo "Deu ruim";
}

?>