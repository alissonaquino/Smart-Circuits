<?php

session_start();

if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$email = $_SESSION['email'];

include_once 'conexao.php';

$sql = "SELECT * FROM usuario WHERE email_usu = '$email' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
  $id = $row['id_usu'];
  $nome = $row['nome_usu'];
  $foto = $row['foto_usu'];
  $sobre = $row['sobre_usu'];
}
$_SESSION['id_usu'] = $id;

$numero = rand(47, 57);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Smart Circuits - Perfil</title>
</head>
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

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-image: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    background-attachment: fixed;
}
main{
    min-width: 300px;
    max-width: 1000px;
    height: 100vh;
    margin: auto;
    padding: 0 20px;
    background-color: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.306);
    border-radius: 0px 0px 5px 5px;
    overflow-x: hidden;
}
.dados-perfil{
    width: 100%;
    height: 400px;
    display: flex;
    flex-direction: column;
}
.img-capa{
    width: 100%;
    height: 270px;
    background: #fff;
    border-radius: 0 0 20px 20px;
    border: 2px solid #0dc0e4;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.306);
    overflow: hidden;
    cursor: pointer;
}
.img-capa img{
    width: 100%;
    height: 100%;
}
ion-icon{
    height: 30px;
    width: 30px;
}
.editar-capa{
    height: 50px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgb(220, 220, 220);
    border-radius: 50%;
    transform: translate(1665%,-130%);
    box-shadow: 1px 5px 15px rgba(255, 255, 255, 0.163);
    overflow: hidden;
    /* position: fixed; */
}
.img-perfil{
    height: 150px;
    width: 130px;
    border-radius: 50%;
    padding: 2px;
    border: 2px solid #0dc0e4;
    background-color: #fff;
    transform: translate(50%, -50%);
    overflow: hidden;
    cursor: pointer;
}
.img-perfil img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.name{
    transform: translate(45%,-200%);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
}

 fieldset{
    margin-bottom: 20px;
    padding: 40px;
    border-radius: 15px 5px;
    margin-left: 70px;
    border: 2px solid #0ed5df;
    width: 70%;
}
.informacoes{
    width: 100%;
    margin: auto;
}
legend{
    color: #042d35;
    font-size: 20px;
    margin: 0px 20px;
    border-bottom: 2px solid #0dc0e4;
    border-right: 2px solid #0dc0e4;
    border-radius: 7px;
    padding: 4px;
    box-shadow: 3px 5px 15px rgba(0, 0, 0, 0.163);
}
fieldset ul li{
    list-style: none;
    margin-bottom: 10px;
}
fieldset ul li span{
    font-size: 16px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
}
.info-pessoais{
    display: flex;
    align-items: center;
    justify-content: left;
}
.editar{
    height: 50px;
    width: 50px;
    background:  rgb(220, 220, 220);
    border-radius: 50%;
    transform: translate(680%,-160%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    box-shadow: 1px 5px 15px rgba(0, 0, 0, 0.055);
}
.ranks{
    display: block;
}
.rank-feitos{
    width: 100%;
    padding: 10px;
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    gap: 7px;
    border-bottom: 1px solid #0dc0e4;
    overflow: hidden;
    margin-bottom: 25px;
    border-radius: 8px;
}
.rank-feitos button{
    width: 100px;
    height: 28px;
    background: linear-gradient(to left, #0dc0e4, #0ed5df, #0fd1db);
    border: 1px solid #fff;
    border-radius: 50px;
    color: rgb(255, 252, 252);
    box-shadow: 3px 10px 10px rgba(0, 0, 0, 0.049);   
    cursor: pointer;
}
.rank-feitos button:hover{
    background: linear-gradient(to left, #0fb1d2, #0eb7c0, #0ebdc6);
}
.nome-quizz h4{
    font-size: 18px;
}
.nome-quizz span{
    display: flex;
    justify-content: center;
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

    <main>
        <section class="dados-perfil">
            <div class="img-capa">
                <img src="capa.jpg" alt="img-capa">
                <div class="editar-capa">
                <button type="button" class="btn " data-toggle="modal" data-target="#editarfoto">
                <ion-icon name="pencil-outline"></ion-icon>
                </button>
                </div>
            </div>
            <div class="img-perfil">
            <img src="perfilusu/<?php if( (isset($foto)) && $foto != ""){ echo "$foto";}else{ echo "padrao.png";} ?>" > 
            </div>
            <div class="name ">
               <?php echo "<h1>$nome</h1>"; ?>
            </div>
        </section>
        <section class="informacoes">
        <div class="row">
                   <div class="col-3">

                   </div>
                <div class="col-3" style="margin-left: 75%;  background:  rgb(220, 220, 220); height: 50px; width: 50px;  border-radius: 50%; display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;">
                    <button type="button" class="btn " data-toggle="modal" data-target="#editarSobre">
                <ion-icon name="pencil-outline"></ion-icon>
                </button>
                </div>
            </div>
           
            <fieldset class="">
               
            <legend class="col-2" style=" transform: translate(0%,-150%); background-color: #fff">Sobre:</legend>
          
          
                <ul>
                    <?php
                    if( (isset($sobre)) && $sobre != "" ) 
                    echo "<li><span>$sobre</span></li>"; 
                    else
                    echo "<li><span>Não informado</span></li>";
                    ?>
                </ul>
                
            </fieldset>
            <fieldset class="ranks">
                <legend class="col-3" style=" transform: translate(0%,-150%); background-color: #fff">Quizzes feitos:</legend>
                <?php
                $sql = "SELECT * FROM quizz WHERE id_usu = '$id' && desabilitar_quizz = '0' ";

                $dados = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($dados) ){
                    $dificuldade = $row['dificuldade_quizz'];
                    $tamanho = $row['tamanho_quizz'];
                    $numero = $row['id_quizz'];
                echo "<div class='rank-feitos'>
                <section class='nome-quizz'>
                    <h4>Dificuldade do quizz:</h4>
                    <span>$dificuldade</span>
                </section>
                <section>
                    <h4>Quantidade de questões:</h4>
                    <span>$tamanho</span>
                </section>
                <a <?php href='jogar.php?id=$numero&i=1'?>
                <button>Jogar!</button>
                </a>
            </div>";
                }
                ?>
            </fieldset>
        </section>
    </main>
    <!-- Modal de editar foto -->
    <div class="modal fade" id="editarfoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editarFoto.php" method="post" enctype="multipart/form-data">

  
<div class="container ">

<div class="mt-3">
    
 </div>

<div class="form-group ">
    <label for="foto" >Foto do Perfil</label>
    <input type="file" class="form-control" name="foto_usu" id="foto">
  </div>

    <div class="modal-footer">
    <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- Modal de editar sobre -->

<div class="modal fade" id="editarSobre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Sobre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editarSobre.php" method="post" >

  
<div class="container ">

<div class="mt-3">
    
 </div>

 <div class="form-group">
    <label for="sobre">Sobre</label>
    <textarea class="form-control" name="sobre" id="sobre" rows="3"></textarea>
  </div>

    <div class="modal-footer">
    <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
    </div>
  </div>
</div>
</div>
</div>
    
</div>
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
</html>