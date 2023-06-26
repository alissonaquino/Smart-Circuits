<?php 
session_start();

include_once("conexao.php");

$pergunta = $_POST["pergunta"];
$alta = $_POST["alta"];
$altb = $_POST["altb"];
$altc = $_POST["altc"];
$altd = $_POST["altd"];
$correta = $_POST["correta"];
$id = $_SESSION["id_quizz"];
$i = $_GET["i"];

$result_usuario = "INSERT INTO pergunta (a_per, b_per, c_per, d_per, pergunta_per, correta_per, posicao_per, id_quizz) VALUES ('$alta', '$altb', '$altc', '$altd', '$pergunta', '$correta', '$i', '$id')";

$resultado_usuario = mysqli_query($conn, $result_usuario);

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


if($i < $_SESSION["tamanho"]){
    $i++;
    header("Location: perguntaQuizz.php?i=$i");
   echo $i;
}else{
    $_SESSION["tamanho"] = "";
    $_SESSION["id_quizz"] = "";
    header("Location: MeusQuizzes.php");
 
}

?>