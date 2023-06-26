<?php

session_start();

include_once("conexao.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
$idusu = $row['id_usu'];
}

$iddis = $_GET['id'];

$conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO comentario (conteudo_com, id_dis, id_usu) VALUES ('$conteudo', '$iddis', '$idusu')";

$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn) )
{
    
header("Location: forum.php");
}else{
echo"Deu ruim fi";
}



// echo "Nome: $nome <br>";
// echo "Email: $email <br>";
// echo "Senha: $senha <br>";

?>