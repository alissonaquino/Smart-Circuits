<?php

session_start();


if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$email = $_SESSION['email'];


include_once 'conexao.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Smart circuits</title>
</head>
<style>
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
.botao{
    width: 200px;
    height: 40px;
    background: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    border: 1px solid #fff;
    border-radius: 50px;
    color: rgb(255, 252, 252);
    box-shadow: 3px 10px 10px rgba(0, 0, 0, 0.049);   
    cursor: pointer;
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
          <a href="sobre1.php" class="nav-link text-white">Aprender</a>
      </li>
      <li class="nav-item">
          <a href="forum.php" class="nav-link text-white">Forum</a>
      </li>
      <li class="nav-item">
          <a href="sobre1.php" class="nav-link text-white">Quizzes</a>
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
    <h3 class='text-center'>Resultados</h3>
    </div>

    

    <div class="container">
    

    <div class="card ">

      
              <div class="card-header">
                <h3 class="card-title container">Correção</h3>

                <div class="card-tools">
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Alternativa Escolhida</th>
                      <th>Alternativa Certa</th>
                      <th style="width: 40px">Resultado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $id = $_GET["id"];
                    $query =  "SELECT * FROM pergunta WHERE id_quizz = $id ";
                    $dados = mysqli_query($conn, $query);
                    while($linha = mysqli_fetch_assoc($dados)){
                        $posicao = $linha["posicao_per"];
                        $altEsc = $_SESSION["a$posicao"];
                        $correta = $linha["correta_per"];
                        if($altEsc == 'A'){
                            $altTexto = $linha["a_per"];
                        }
                        if($altEsc == 'B'){
                            $altTexto = $linha["b_per"];
                        }
                        if($altEsc == 'C'){
                            $altTexto = $linha["c_per"];
                        }
                        if($altEsc == 'D'){
                            $altTexto = $linha["d_per"];
                        }

                        if($correta == 'a'){
                            $corretaTexto = $linha["a_per"];
                        }
                        if($correta == 'b'){
                            $corretaTexto = $linha["b_per"];
                        }
                        if($correta == 'c'){
                            $corretaTexto = $linha["c_per"];
                        }
                        if($correta == 'd'){
                            $corretaTexto = $linha["d_per"];
                        }

                    echo "<tr>
                    <td><p class='mt-3'>$posicao.</p></td>
                    <td><p class='mt-3'>($altEsc) $altTexto </p></td>
                    <td><p class='mt-3'> ($correta) $corretaTexto </p></td>";
                    if($altTexto == $corretaTexto){
                      echo " <td class='text-center bg-success'><h5 style='color: #fff'><ion-icon size='large' name='checkmark-circle-outline'></ion-icon></h5></td>";
                    }else{
                    echo " <td class='text-center bg-danger'><h5 style='color: #fff'><ion-icon size='large' name='close-circle-outline'></ion-icon></h5></td>";
                    } echo"
                  </tr>";
                    }
                    ?>
                    
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <div class="mt-3 text-center">
              <h3>Avalie Esse Quizz</h3>
           <a href="avaliar.php?id=<?php echo $id?>&estrela=1"> <ion-icon size="large" name="star"></ion-icon></a>
           <a href="avaliar.php?id=<?php echo $id?>&estrela=2"> <ion-icon size="large" name="star"></ion-icon></a>
           <a href="avaliar.php?id=<?php echo $id?>&estrela=3"> <ion-icon size="large" name="star"></ion-icon></a>
           <a href="avaliar.php?id=<?php echo $id?>&estrela=4"> <ion-icon size="large" name="star"></ion-icon></a>
           <a href="avaliar.php?id=<?php echo $id?>&estrela=5"> <ion-icon size="large" name="star"></ion-icon></a>
            </div>

            <div class="mt-5 mb-5" >
              <a href="quizzes.php">
            <button class='botao' type='submit'>Finalizar</button>
              </a>
            </div>
        </div>
  </div>

  

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
</body>
</html>