<?php
session_start();
include_once "conexao.php";
$alt = $_POST["alternativa"];
$id= $_GET["id"];
$i = $_GET["i"];
$_SESSION["a$i"] = $alt;
echo $_SESSION["a$i"];

if( (isset($alt)) && $alt != "" ){

$i++;
$query =  "SELECT * FROM quizz WHERE id_quizz = $id LIMIT 1";
$dados = mysqli_query($conn, $query);
                while($linha = mysqli_fetch_assoc($dados)){
                    $tamanho = $linha["tamanho_quizz"];
                    if($i <= $tamanho){
                    header("Location: jogar.php?id=$id&i=$i");
                    }
                    else{
                    header("Location: resultado.php?id=$id&i=$i");
                    }
                }
            }
            else{
                $_SESSION['erro'] = "Escolha uma alternativa";
                header("Location: jogar.php?id=$id&i=$i");
            }

?>