<?php 
$id = $_GET["id"];
$i = $_GET["i"];

$i = $i - 1;

if($i >= 1){
header("Location: jogar.php?id=$id&i=$i");
}else{
header("Location: quizzes.php");
}

?>