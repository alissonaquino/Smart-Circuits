<?php

session_start();


if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$email = $_SESSION['email'];


include_once 'conexao.php';

$numero = rand(47, 57);

?>

<!DOCTYPE html>
<html lang="en">
<title>Quizzes</title>
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
    border-color: ;
}
body{
    background-image: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    background-attachment: fixed;
}
</style>
<body style="">

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


<br>
<div class='container card mt-5' style=" background-color: white " id="principal">
<div class='mb-5'>
    <h3 class='text-center'>Area de Quizzes</h3>
    </div>
    <div class='text-center'>
    
    <a class='btn btn-success' href='criarQuizz.php?i=0'>Criar</a>
    </div>
    <div class='mt-5 card'>

  <ul class="nav nav-tabs nav-justified">
  <li class="nav-item">
    <a class="nav-link active" href="#">Quizzes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="MeusQuizzes.php">Meus Quizzes</a>
  </li>
</ul>
    </Nav>
    <div class='card'>
  <div class='card-body'>
  <form class="form-inline" action="" method="POST">
    <div class="row mb-3 mt-2">
    <div class="col-md-3 col-6 mt-2">
    <select class="form-control" name="tamanho" id="tamanho">
      <option value="">Selecione um tamanho</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
      </div>
      <div class="col-md-3 col-6 mt-2">
      <select class="form-control" name="avaliacao" id="avaliacao">
      <option value="">Selecione uma avaliação</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
      </div>
      <div class="col-md-3 col-6 mt-2">
      <select class="form-control" name="dificuldade" id="dificuldade">
      <option value="">Selecione um nível de dificuldade</option>
      <option>Fácil</option>
      <option>Médio</option>
      <option>Difícil</option>
    </select>
      </div>
      <div class="col-md-2 col-6 mt-2">
      <input class="form-control" name="assunto" placeholder="Assunto" id="assunto">
    
      </div>
      <div class="col-md-1 col-6 mt-2">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
      </div>
      </div>
    </form>
  
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Assunto</th>
          <th>Criador</th>
          <th>Tamanho</th>
          <th>Avaliação</th>
          <th>Dificuldade</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody id='tbody1'>
   <?php
   if(isset($_POST['assunto'])){
    $assunto = $_POST['assunto'];
  }else{
    $assunto = '';
  }
  if(isset($_POST['dificuldade'])){
    $dificuldade = $_POST['dificuldade'];
  }else{
    $dificuldade = '';
  }
  if(isset($_POST['tamanho'])){
    $tamanho = $_POST['tamanho'];
  }else{
    $tamanho = '';
  }
   
   $query =  "SELECT * FROM quizz WHERE desabilitar_quizz = '0' && assunto_quizz LIKE '%$assunto%' && dificuldade_quizz LIKE '%$dificuldade%' && tamanho_quizz LIKE '%$tamanho%'";

   $dados = mysqli_query($conn, $query);
   while($linha = mysqli_fetch_assoc($dados)){
       $id = $linha["id_quizz"];
       $idusu = $linha["id_usu"];
       $tamanho =  $linha["tamanho_quizz"];
       $dificuldade = $linha["dificuldade_quizz"];
       $assunto2 = $linha["assunto_quizz"];

       $query2 =  "SELECT * FROM usuario WHERE id_usu = $idusu ";
       $dados2 = mysqli_query($conn, $query2);
       
       while($linha2 = mysqli_fetch_assoc($dados2)){
       $nome = $linha2["nome_usu"]; 
       } 

                   $qtd = 0;
                   $soma = 0;

                    $query4 =  "SELECT * FROM avaliacao WHERE id_quizz = $id ";
                    $dados4 = mysqli_query($conn, $query4);
                    while($linha4 = mysqli_fetch_assoc($dados4)){
                        $soma = $soma + $linha4['avaliacao_ava'];
                        $qtd++;
                        } 
                        if($qtd != 0){
                        $media = $soma / $qtd;
                        }else{
                          $media = 0;
                        }
       
   echo " 
      <tr key={id}>
        <td>$assunto2</td>
        <td>$nome</td>
        <td>$tamanho Perguntas</td>";
        if($media == 0){
        echo "<td>Não avaliado</td>";  
        }else{
          echo "<td>$media</td>";
        }
        echo "
        <td>$dificuldade</td>

        <td id='ci'>
        <a href='jogar.php?id=$id&i=1'>
        <button class='btn btn-sm btn-success'>Jogar</button>
        </a>
        </td>
      </tr>
      ";
    
    }
         ?>
         
        </tbody>
    </Table>
  </div>
</div>
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