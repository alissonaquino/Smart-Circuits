<?php
session_start();

include_once("conexao.php");

$id = $_GET["id"];

$email = $_SESSION['email'];

$sql1 = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($dados) ){
    $idusu = $row['id_usu'];
}

$sql = "SELECT * FROM gostar WHERE id_usu = '$idusu' && id_dis = '$id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $result_usuario = "INSERT INTO gostar (id_dis, id_usu, gostar_gos, deslike_gos) VALUES ('$id', '$idusu', '1', '0')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    header("Location: forum.php");

}elseif(isset($resultado)){
    $sql = "SELECT * FROM gostar WHERE id_usu = '$idusu' && id_dis = '$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    while($linha = mysqli_fetch_assoc($result) ){
        $gostar = $linha['gostar_gos']; 
    }
    if($gostar == '0'){
        $query = "UPDATE gostar SET gostar_gos = '1', deslike_gos = '0' WHERE id_dis = '$id' && id_usu = '$idusu' ";
    $result = mysqli_query($conn, $query);
    }else{
        $query = "UPDATE gostar SET gostar_gos = '0', deslike_gos = '0' WHERE id_dis = '$id' && id_usu = '$idusu' ";
    $result = mysqli_query($conn, $query);
    }
    header("Location: forum.php");

}else{
    echo"Aqui"; 
}

?>