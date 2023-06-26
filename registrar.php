<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha2 = filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING);

if($senha == $senha2){
    $senha = md5($senha);

$result_usuario = "INSERT INTO usuario (nome_usu, email_usu, senha_usu) VALUES ('$nome', '$email', '$senha')";

$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn) )
{
header("Location: login.php");
}else{
echo"Deu ruim fi";
}

}else{
    echo "Senhas não correspondem";
}


// echo "Nome: $nome <br>";
// echo "Email: $email <br>";
// echo "Senha: $senha <br>";
