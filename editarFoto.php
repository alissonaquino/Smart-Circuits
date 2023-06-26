<?php
session_start();
include "conexao.php";

$id = $_SESSION['id_usu'];

if(isset($_FILES['foto_usu'])){
    $extensao = strtolower(substr($_FILES['foto_usu']['name'], -4));
    if($extensao != ""){
    $novo_nome = md5(time()) . $extensao;
    }
    $diretorio = "perfilusu/" ;
    $file = $_FILES['foto_usu'];
    // $file = move('perfilpet', $novo_nome);

    move_uploaded_file($_FILES['foto_usu']['tmp_name'], $diretorio.$novo_nome);
//     $db = db_connect();
//     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
//     $db->close();

    //$query = "UPDATE pergunta SET pergunta_per = '$pergunta' WHERE id_quizz = $id && posicao_per = '$i' ";
    $sql = "UPDATE `usuario` SET foto_usu = '$novo_nome' WHERE id_usu = '$id' ";
    if (mysqli_query($conn, $sql) ){
        header('Location: perfil2.php');
       
    }else{
        echo "Deu ruim";
    }


}else{
        echo "Foto não recebida";

}




?>