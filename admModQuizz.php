<?php
include "conexao.php";

if(isset($_POST['busca'])){
  $pesquisa = $_POST['busca'];
}else{
  $pesquisa = '';
}

$sql = "SELECT * FROM moderacao WHERE motivo_mod LIKE '%$pesquisa%' && id_quizz != '0' ";

$dados = mysqli_query($conn, $sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Tela de Inicio -->
  <div class="preloader flex-column justify-content-center align-items-center">

  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="adm.php" class="brand-link">
      <span class="brand-text font-weight-light">Smart Circuits</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
        <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
         
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Buscar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admBusQuizz.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quizz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admBusUsu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuário</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Moderação
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admModQuizz.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quizz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admModDis.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Discussões</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admModCom.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comentários</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="admCadasAdm.php" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cadastrar Adm</p>
                </a>
              </li>
          </li>
          </li>
            </ul>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Quizzes denunciados</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

      
    <form action="admBusUsu.php" method="POST" >
      <div class="container">
      <div class="row ">
        <div class="col-10">
      <input class="form-control mr-sm-2 " type="search" name="busca" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="col-2">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </div>  
    </div>
      
    </form>
    <div style="box-shadow: 10px 5px 5px #dee2e6;">
    <table class="table table-hover mt-5" style="">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Assunto</th>
      <th scope="col">Criador</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Avaliação</th>
      <th scope="col">Motivo</th>
      <th scope="col">Visualizar</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  <tbody>
  <?php
$contagem = 0;
while($linha = mysqli_fetch_assoc($dados) ){
    $id = $linha["id_quizz"];
    $motivo = $linha['motivo_mod'];
    $sql2 = "SELECT * FROM quizz WHERE id_quizz = '$id' ";
    $dados2 = mysqli_query($conn, $sql2);
    while($linha2 = mysqli_fetch_assoc($dados2) ){
    $idusu = $linha2["id_usu"];
    $tamanho =  $linha2["tamanho_quizz"];
    $dificuldade = $linha2["dificuldade_quizz"];
    $assunto2 = $linha2["assunto_quizz"];
    }
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
 $contagem++;

  echo "
  <div class='modal fade' id='excluir$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Excluir</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <h5> Tem certeza que deseja excluir ? </h5>
      </div>
      <div class='modal-footer'>
       <a href='excluirDenunciaQuizz.php?id=$id' type='button' class='btn btn-danger'>Excluir</a>
      </div>
    </div>
  </div>
</div>


  <div class='modal fade' id='editar$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Editar informações</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action='editar.php?id=$id' method='post'>
  
      <div class='container '>
      <div class=''>
          <div class='row'>
      <div class='col-12'>
        <label for='nome'>Nome do pet</label>
      <input type='text' name='nome_pet' id='nome' class='form-control mt-2' placeholder='Digite o nome do pet'>
    </div>
    </div>
  <div class='row mt-3'>
    <div class='col-12'>
        <label for='animal'>Animal</label>
        <select class='form-control mt-2' name='animal_pet' id='animal'>
    <option id='Cachorro'>Cachorro</option>
    <option id='Gato'>Gato</option>
        </select>
      
    </div>
    <div class='col-12 mt-3'>
    <label for='raca'>Raça</label>
      <input type='text' name='raca_pet' id='raca' class='form-control mt-2' placeholder='Digite a raça do animal'>
    </div>
  </div>
  
  </div>
 
  
  
  </div>
  
  
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-primary mt-3'>Editar</button>
      </div>
    </div>
  </div>
</div>
</form>

   <tr>
 <th scope='row'>$contagem </th>
 <td>$assunto2</td>
 <td>$nome</td>";
 if($tamanho == 1){
 echo "<td>$tamanho pergunta</td>";
 }else{
echo "<td>$tamanho perguntas</td>";
 }
 if($media == 0){
    echo "<td>Não avaliado</td>";  
    }else{
      echo "<td>$media</td>";
    }
    echo "
 <td>$motivo</td>
 <td ><a href='jogar.php?id=$id&i=1' class='btn btn-primary btn-sm'>Ver</a></td>
 <td>
 <a href='aceitarDenunciaQuizz.php?id=$id' class='btn btn-success btn-sm'>Permitir</a>
 <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#excluir$id'>Excluir</button></td>
 

 
 
</tr>";

}

  
 ?>
   
   
  </tbody>
</table>
</div>

</div>
               

    </section>
    </div>
</div>


<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
</body>
</html>