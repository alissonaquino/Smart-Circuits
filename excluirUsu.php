<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM `usuario` WHERE `id_usu` = $id";

if (mysqli_query($conn, $sql) ){
    header('Location: admBusUsu.php');
}else{
    echo "Erro";
}

?>