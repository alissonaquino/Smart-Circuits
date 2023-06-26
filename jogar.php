<?php
session_start();
include_once "conexao.php";
$id = $_GET["id"];
$i = $_GET["i"];

$queryq =  "SELECT * FROM quizz WHERE id_quizz = $id LIMIT 1";
$dadosq = mysqli_query($conn, $queryq);
while($linhaq = mysqli_fetch_assoc($dadosq)){
    $tamanho = $linhaq["tamanho_quizz"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <title>Smart circuits - Quizzes</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-image: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    /* background-color: #0d767c; */
    /* background: linear-gradient(to top, #0dc0e4, #0ed5df, #0fd1db);  */
    display: flex;
    padding: 15px;
    height: 100vh;
}
main{
    min-width: 400px;
    max-width: 800px;
    display: block;
    min-height: 600px;
    margin: 25px  auto;
    background: #fff;
    border-radius: 30px;
    box-shadow: 3px 10px 10px rgba(0, 0, 0, 0.049);
}
section{
    padding: 20px;
}
.perguntas{
    max-height: 50%;
    display: flex; 
    background: rgb(235, 235, 235);
    border-radius: 30px 30px 0 0 ;
    box-shadow: 5px 7px 20px rgba(0, 0, 0, 0.053); 
}
.area-perguntas h1{
    color: #0d767c;
    font-size: 25px;
}
.area-perguntas p{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    margin: 15px auto;
    font-size: 18px;
}
.area-perguntas{
    width: 100%;
    max-height: 50%;
    padding: 20px;
}
.area-alternativas{
    padding: 20px;
    width: 100%;
    margin-top: 20px;
    box-shadow: 3px 7px 20px  rgba(204, 204, 204, 0.131);
}
.area-alternativas label{
    font-weight: 600;
    font-size: 20px;
    color: #0d767c;
}
.area-respostas input{
    margin-right: 10px;
    width: 40px;
}
 input[type=radio]:checked{
    color: red;
}
.area-alternativas span{
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
}
.local-img {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}
.local-img img{
    height: 120px;
    width: 180px;
}
.previous{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    width: 100%;
    height: 100px;
    padding: 50px;
}
.previous button{
    width: 200px;
    height: 35px;
    background: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    border: 1px solid #fff;
    border-radius: 50px;
    color: rgb(255, 252, 252);
    box-shadow: 3px 10px 10px rgba(0, 0, 0, 0.049);   
    cursor: pointer;
}
.previous button:hover{
    background: linear-gradient(to left, #0fb1d2, #0eb7c0, #0ebdc6);
}
</style>
<body>
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

<main style="margin-top: 5%;">

                <?php 

                $query =  "SELECT * FROM pergunta WHERE id_quizz = $id && posicao_per = $i LIMIT 1";
                $dados = mysqli_query($conn, $query);
                while($linha = mysqli_fetch_assoc($dados)){
                    $posicao = $linha["posicao_per"];
                    $pergunta = $linha["pergunta_per"];
                    $alta = $linha["a_per"];
                    $altb = $linha["b_per"];
                    $altc = $linha["c_per"];
                    $altd = $linha["d_per"];
                    $foto = $linha["foto_per"];
                    
                echo "
        <section class='perguntas'>
            <div class='area-perguntas'>";
            if( (isset($_SESSION['erro'])) && $_SESSION['erro'] != ""){
                echo "<span class='text-danger text-center'>".$_SESSION['erro']."</span>";
                $_SESSION['erro'] = "";
            }echo"
            <div class='row'>
                <div class='col-10'>
                <h1>Pergunta $posicao</h1>
                </div>
                <div class='col-2'>
               <button class='btn' type='button' data-toggle='modal' data-target='#reportar'> <ion-icon size='large' name='megaphone-outline'></ion-icon> </button>
                </div>
            </div>
                <p>$pergunta</p>";
                if( (isset($foto)) && $foto != "" ){
                    echo "<div class='local-img'> 
                    <img src='fotoQuizz/$foto' alt=''>
                    </div> ";
                }else{
                }
                echo"
            </div>
        </section>
        <section class='respostas'>
            <form method='POST' action='avancar.php?id=$id&i=$i'>
                <div class='area-alternativas'>
                    <label>A.</label>
                    <input type='radio' name='alternativa' class='alternativas' value='A'>
                    <span>$alta</span>
                </div>
                <div class='area-alternativas'>
                    <label>B.</label>
                    <input type='radio' name='alternativa' class='alternativas' value='B'>
                    <span>$altb</span>
                </div>
                <div class='area-alternativas'>
                    <label>C.</label>
                    <input type='radio' name='alternativa' class='alternativas' value='C'>
                    <span>$altc</span>
                </div>
                <div class='area-alternativas'>
                    <label>D.</label>
                    <input type='radio' name='alternativa' class='alternativas' value='D'>
                    <span>$altd</span>
                </div> 
            
            
        </section>
        <section class='previous'>
            <a href='voltar.php?id=$id&i=$i' >
            <button id='btn-voltar' type='button'>Voltar</button>
            </a>
            "; if($i < $tamanho){
                echo"<button id='btn-avancar' type='submit'>Avançar</button>";
            }else{
                echo"<button id='btn-avancar' type='submit'>Finalizar</button>";
            }echo"
        </section>
        </form>
        <!-- Modal de reportar -->

<div class='modal fade' id='reportar' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Denunciar Quizz</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action='reportarQuizz.php?id=$id&i=$i' method='post' >

  
<div class='container '>

<div class='mt-3'>
    
 </div>

 <div class='form-group'>
    <label for='sobre'>Motivo</label>
    <textarea class='form-control' name='motivo' id='sobre' rows='3'></textarea>
  </div>

    <div class='modal-footer'>
    <button type='submit' class='btn btn-danger mt-3'>Denunciar</button>
    </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
        ";
    } 
    ?>
    </main>
</body>

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="quizzes.js"></script>

</html>