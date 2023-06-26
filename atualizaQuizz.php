<?php

session_start();
$i = $_GET["i"];
$id = $_GET["id"];

$email = $_SESSION['email'];

include_once 'conexao.php';

$query =  "SELECT * FROM pergunta WHERE id_quizz = '$id' && posicao_per = '$i'";
$dados = mysqli_query($conn, $query);
while($linha = mysqli_fetch_assoc($dados)){
    $pergunta = $linha["pergunta_per"];
    $a = $linha["a_per"];
    $b = $linha["b_per"];
    $c = $linha["c_per"];
    $d = $linha["d_per"];
}



?>

<!DOCTYPE html>
<html lang="en">
<title>iPet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button,a {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
#peril{
  margin-top: 10px;
}
#header1{

  background-image: url("imagem/gatoedog5.jpg")

}
#nav1{
  background-color: #FFFA8B;


}
#principal{
  box-shadow: 1px 7px 3px 7px rgba( 0, 0 ,0, 0.3);
}
#boxpet{
  box-shadow: 5px 5px 5px rgba( 0, 0 ,0, 0.5);
}
#bt1{
  margin-right: 5px;
  place-items: center;
  margin-bottom: 10px;
  box-shadow: 1.5px 1.5px rgba( 0, 0 ,0, 0.5);
  border-radius: 5px;
} 
#bt2{
  margin-left: 5px;
  place-items: center;
  margin-bottom: 10px;
  box-shadow: 1.5px 1.5px rgba( 0, 0 ,0, 0.5); 
  border-radius: 5px;
} 
#caixac{
  max-width: auto;
  max-height: auto;
}
.form-control{
    border-color: #8FBC8F;
}
</style>
<body style="background: linear-gradient(to left, #0fc3cc, #10c3cd);">

<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg bg-dark shadow navbar-dark p-md-3">
  <div class="container">
  <a  href="#" class="navbar-brand">Smart Circuits</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mx-auto"></div>
    <ul class="navbar-nav">
      <li class="nav-item">
          <a href="home.php?=" class="nav-link text-white">Inicío</a>
      </li>
      <li class="nav-item">
          <a href="perfil2.php" class="nav-link text-white">Perfil</a>
      </li>
      <li class="nav-item">
          <a href="player.html" class="nav-link text-white">Estudos</a>
      </li>
      <li class="nav-item">
          <a href="sistemasnumeracao.php" class="nav-link text-white">Documentações</a>
      </li>
      <li class="nav-item">
          <a href="forum.php" class="nav-link text-white">Forum</a>
      </li>
      <li class="nav-item">
          <a href="quizzes.php" class="nav-link text-white">Quizzes</a>
      </li>
      <?php
        if($_SESSION['email'] != ''){
        echo "<li class='nav-item'>
          <a href='sair.php' class='nav-link text-white'>Sair</a> </li>";}else{

          } ?>
      
    </ul>

  </div>
  </div>

</nav>

<br><br>
<div class='container card mt-5' style=" background-color: white " id="principal">
<div class='mb-3'>
    <h3 class='text-center'>Area de Quizzes</h3>
    </div>
    <div id='formulario' class=''>
    <form id='formulario' method="POST" enctype="multipart/form-data" action="atualizarPergunta.php?i=<?php echo $i;?>&id=<?php echo $id;?>">
    <div class="form-group">
    <label for="pergunta mb-3">Pergunta <?php echo $i;?></label>
    <input type="text" class="form-control" id="pergunta" name="pergunta" <?php echo" value='$pergunta'"?> rows="3"></textarea>
  </div>
  <br>
  <div class="form-group ">
    <label for="foto" >Foto </label>
    <input type="file" class="form-control" name="foto_per" id="foto">
  </div>
<br>
      <div class='row'>
        <div class='col-6'>
        <div class="form-group mb-3">
    <label for="alta">Alternativa A </label>
    <input type="text" class="form-control" id="alta" name="alta" <?php echo" value='$a'"?>  placeholder="Digite a alternativa A">
    <div class="ml-1 mt-1 form-check">
  <input class="form-check-input" type="radio" name="correta" id="exampleRadios1" value="a" checked>
  <label class="form-check-label" for="exampleRadios1">
    Alternativa Correta
  </label>
</div>
  </div>
      </div>
      
      <div class='col-6'>
      <div class="form-group mb-3">
    <label for="altb">Alternativa B </label>
    <input type="text" class="form-control" <?php echo" value='$b'"?> id="altb" name="altb" placeholder="Digite a alternativa B">
    <div class="ml-1 mt-1 form-check">
  <input class="form-check-input" type="radio" name="correta" id="exampleRadios2" value="b" >
  <label class="form-check-label" for="exampleRadios2">
  Alternativa Correta
  </label>
  </div>
      </div>
      </div>
</div>
      <div class='row'>
        <div class='col-6'>
        <div class="form-group mb-3">
    <label for="altc">Alternativa C </label>
    <input type="text" class="form-control" id="altc" name="altc" <?php echo" value='$c'"?> placeholder="Digite a alternativa C">
    <div class="ml-1 mt-1 form-check">
  <input class="form-check-input" type="radio" name="correta" id="exampleRadios3" value="c" >
  <label class="form-check-label" for="exampleRadios3">
  Alternativa Correta
  </label>
  </div>
      </div>
</div>
      <div class='col-6'>
      <div class="form-group mb-3">
    <label for="altd">Alternativa D </label>
    <input type="text" class="form-control" id="altd" name="altd" <?php echo" value='$d'"?> placeholder="Digite a alternativa D">
    <div class="ml-1 mt-1 form-check">
  <input class="form-check-input" type="radio" name="correta" id="exampleRadios4" value="d" >
  <label class="form-check-label" for="exampleRadios4">
  Alternativa Correta
  </label>
  </div>
      </div>
      </div> 
</div>  
     
    


     
      
      <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
    </div>
    
<br />
  </div>


<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

</body>
</html>