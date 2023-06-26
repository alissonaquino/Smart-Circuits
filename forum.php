<?php

session_start();

$email = $_SESSION['email'];


include_once 'conexao.php';

$query2 =  "SELECT * FROM usuario WHERE email_usu = '$email'";
       $dados2 = mysqli_query($conn, $query2);
       
       while($linha2 = mysqli_fetch_assoc($dados2)){
       $nome = $linha2["nome_usu"]; 
       $idusu = $linha2["id_usu"];
       } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Forum</title>
    <!-- <link rel="stylesheet" href="forum.css"> -->
    
</head>
<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #45c4d0;
}
header{
    background: #36969f;
    height: 100px;
}

main{
    background-color: white;
    min-width: 300px;
    max-width: 1000px;
    margin: auto;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.306);
    padding: 20px;

}

.public{
    display: flex;
    height: 80px;
    align-items: center;
    justify-content: space-between;
    padding: 25px;
    width: 100%;
}
.modal-post{
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.modal-post button{
    width: 80%;
    height: 35px;
    text-transform: uppercase;
    background: #45c4d0;
    color: white;
    border: 1px solid rgb(181, 181, 181);
    border-radius: 15px;
    box-shadow: -2px 5px 15px rgba(0, 0, 0, 0.147);
    cursor: pointer;
}
.buscar{
    width: 50%;
}
.buscar input[type=text]{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    width: 80%;
    height: 35px;
    border-radius: 15px;
    text-align: center;
    border: 1.5px solid #45c4d0;
    box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.147);
}
.forum-posts{
    width: 90%;
    overflow-y: scroll;
    height: 500px;
    margin: 20px auto;
    border: 2px solid #45c4d0;
    padding: 20px;
    border-radius: 10px 6px;
    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.252);
    background: rgb(238, 237, 237);
    
}
.forum-posts p{
    text-align: center;
    font-size: 18px;
}
.dados-forum-post{
    text-align: center;
    margin-bottom: 8px;
}
.dados-forum-post p{
   padding: 3px;
}
.dados-forum-post img{
    width: 50px;
    height: 50px;
    border-radius: 25px;
    margin-right: 5px;
}
.interacoes{
    width: 70%;
    height: 40px;
    margin: 45px auto 0 auto;
    background-color: #45c4d0;
    border-radius: 15px;
    box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.139);
}
.interacoes ul{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
}
.interacoes ul li{
    width: 30%;
    list-style: none;
    text-align: center;
}
.interacoes ul li {
    height: 25px;
    margin-right: 10px;
}
.interacoes ul li img{
    height: 20px;
    color: white;
    cursor: pointer;
}
.modal-forum{
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    overflow-y: hidden;
}
.modal-forum-public{
    max-width: 670px;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #fff;
    margin: auto;
    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.276);
    border-radius: 10px;
    transform: translateY(30%);
}
.modal-forum-public input{
    margin: 50px auto;
    width: 60%;
    height: 100px;
    border-radius: 8px;
    padding: 3px;
    border: 2px solid #2a737a;
    text-align: center;
    box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.146);
}
.modal-forum-public button{
    width: 40%;
    height: 30px;
    border-radius: 8px;
    background: #36969f;
    color: white;
    box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.146);
}
.fechar{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
    color: white;
    top: 10px;
    width: 40px;
    height: 40px;
    transform: translate(820%,-420%);
    border-radius: 50%;
    cursor: pointer;
}
.box-comentarios{
    padding: 0 10px;
    height: 300px;
    overflow-y: scroll;
    display: none;
    
}
.publicar-comentario{
    width: 90%;
    margin: 0 auto 10px auto;
    background-color: #45c4d0;
    height: 100px;
    border-radius: 15px;
    box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.139);
    padding: 7px;
   
}
.fechar-comentario{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #2a737a;
    cursor: pointer;
}
.publicar-comentario input[type="text"]{
    width: 100%;
    height: 40px;
    border-radius: 15px;
    border: none;
    background-color: rgb(255, 255, 255);
    padding: 4px;
    box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.139);
}
.publicar-comentario input[type="submit"]{
    width: 80%;
    display: block;
    margin: 0 auto;
    height: 40px;
    border-radius: 15px;
    border: none;
    margin-top: 5px;
    background: #fff;
    padding: 4px;
    color: #2a737a;
    box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.139);
    cursor: pointer;
}
.comentarios{
    width: 90%;
    height: 200px;
    position: relative;
    margin: 0 auto 10px auto;
    background-color: #45c4d0;
    border-radius: 15px;
    box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.139);
    padding: 10px 20px;
    border-bottom: 1px solid #fff;
    overflow-y: scroll;
    
}
.comentarios .dados-comentarios{
    display: flex;
}
.comentarios .dados-comentarios img{
    width: 30px;
    height: 30px;
    border-radius: 25px;
    margin-right: 5px;
    border: 1px solid #fff;
}
.comentarios .dados-comentarios h3{
    font-size: 18px;
    margin-top: 5px;
    margin-left: 5px;
    color: #fff;
    text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.221);
}
.comentarios p{
    color: #fff;
    text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.221);
}
@media screen and (max-width:768px){
    .forum-posts{width: 100%; display: inline-block; margin: 15px auto;}
    
} 
.botao{
    width: 100%;
    height: 35px;
    text-transform: uppercase;
    background: #45c4d0;
    color: white;
    border: 1px solid rgb(181, 181, 181);
    border-radius: 15px;
    box-shadow: -2px 5px 15px rgba(0, 0, 0, 0.147);
    cursor: pointer;
}
a {
  color: white;
  text-decoration: none;
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

      <br><br><br>
     
    <main>
        <div class="modal-forum">
            <form method="POST" action="publicarDiscussao.php">
            
            <div class="modal-forum-public">
                <div class="fechar" onclick="fecharModal()">
                    <p>X</p>
                </div>
                <h1>Publique a sua discussão</h1>
                <input type="text" required placeholder="Digite aqui o assunto" name="conteudo" id="content">
                <button >Publicar!</button>
            </div>
        </div>
    </form>
        <div class="public">
            <div class="modal-post">
                <button onclick="modalPublic()">Publicar</button>
            </div>
            <div class="buscar">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12">
                    <input type="text" name="assunto" placeholder="O que deseja buscar...">
                    </div>
            </form>
                </div>
            </div>
        </div>
        <div class="post-boxes">
            <?php
            if(isset($_POST['assunto'])){
                $assunto = $_POST['assunto'];
              }else{
                $assunto = '';
              }

            $query =  "SELECT * FROM discussao WHERE conteudo_dis like '%$assunto%'";
            $dados = mysqli_query($conn, $query);
            while($linha = mysqli_fetch_assoc($dados)){
                $id = $linha['id_dis'];
                $conteudo = $linha["conteudo_dis"];
                $data = $linha["data_dis"];
                $data = DateTime::createFromFormat("Y-m-d", $data);

                $idusuario = $linha["id_usu"];

                $query3 =  "SELECT * FROM usuario WHERE id_usu = $idusuario ";
                $dados3 = mysqli_query($conn, $query3);

                while($linha3 = mysqli_fetch_assoc($dados3)){
                    $nome = $linha3["nome_usu"]; 
                    $foto = $linha3["foto_usu"];
                    }

                    $likes = 0;

                    $query4 =  "SELECT * FROM gostar WHERE id_dis = $id && gostar_gos = '1'";
                    $dados4 = mysqli_query($conn, $query4);
                    while($linha4 = mysqli_fetch_assoc($dados4)){
                        $likes++;
                        } 

            echo "

        <div class='forum-posts'>
        <button class='btn' type='button' data-toggle='modal' data-target='#reportar$id'> <ion-icon size='large' name='megaphone-outline'></ion-icon> </button>
    <div class='dados-forum-post'>
       <a href='perfil.php?id=$idusuario'> <img  class='img-post'"; if( ($foto != "") && (isset($foto)) ){ echo "src='perfilusu/$foto'";}else{echo "src='perfilusu/padrao.png' ";} echo "alt='foto'></a>
       
        <h3>$nome</h3> 
        
        <p>".$data->format("d/m/Y")."</p>
    </div>
    <p>$conteudo</p>
    <div class='interacoes'>
    <ul>
        <li>
           <a href='like.php?id=$id'> $likes <img src='thumbs-up-solid.svg' alt='svg'> </a>
        </li>
        <li >
            <img onclick='abrirComentarios($id)' src='comments-solid.svg' alt='svg'>
        </li>
        <li>
        <a href='deslike.php?id=$id'>   <img src='thumbs-down-solid.svg' alt='svg'> </a>
        </li>
    </ul>
    <div id='boxcomentarios$id'  class='box-comentarios'>
        <span onclick='fecharComentarios($id)' class='fechar-comentario'>X</span>
        <div class='publicar-comentario'>
            <form action='inserirComentario.php?id=$id' method='POST'>
                <input type='text' name='conteudo' placeholder='Comentario..' REQUIRED>
                <input type='submit' value='Comentar!'>
            </form>
        </div>";
        $query4 =  "SELECT * FROM comentario WHERE id_dis = $id ";
        $dados4 = mysqli_query($conn, $query4);
        
        while($linha4 = mysqli_fetch_assoc($dados4)){
            $idcom = $linha4['id_com'];
            $conteudocom = $linha4['conteudo_com'];
            $idusucom = $linha4['id_usu'];
            $query5 =  "SELECT * FROM usuario WHERE id_usu = $idusucom ";
                $dados5 = mysqli_query($conn, $query5);

                while($linha5 = mysqli_fetch_assoc($dados5)){
                    $nomecom = $linha5["nome_usu"]; 
                    $fotocom = $linha5["foto_usu"];
                    } 

            echo "
            <div class='comentarios'>
            <div class='dados-comentarios'>
            <img class='img-post'"; if( ($fotocom != "") && (isset($fotocom)) ){ echo "src='perfilusu/$fotocom'";}else{echo "src='perfilusu/padrao.png' ";} echo "alt='foto'>
            
            <div class='row'>
            <div class='col-10'>
            <h3>$nomecom<h3>
            </div>
            
            <div class='col-2'>
            <button class='btn' type='button' data-toggle='modal' data-target='#reportar$idcom'> <ion-icon size='large' name='megaphone-outline'></ion-icon> </button>
            </div>
            
            </div>
            
            </div>
            <br>
            <p>$conteudocom</p>
            </div>
            <!-- Modal de reportar discussão -->

<div class='modal fade' id='reportar$idcom' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Denunciar Comentario</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action='reportarComentario.php?id=$idcom&' method='post' >

  
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
        echo "
    </div>
</div>
</div>

<!-- Modal de reportar discussão -->

<div class='modal fade' id='reportar$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Denunciar Discussão</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action='reportarDiscussao.php?id=$id&' method='post' >

  
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
        </div>
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
<script>

const abrirComentarios = (id) => {
    let box = document.getElementById('boxcomentarios'+id)
    
    box.style.display = 'block'
}
const fecharComentarios = (id) => {
    let box = document.getElementById('boxcomentarios'+id)
    
    box.style.display = 'none'
}
const fecharModal = () =>{
    let modal = document.querySelector('.modal-forum')
    
    modal.style.display = 'none'
}
const modalPublic = () =>{
    let modal = document.querySelector('.modal-forum')
    
    modal.style.display = 'block'
}
const postforum = () =>{
    let content = document.getElementById('content').value
    var postagem = {}
    let name = 'Talles'
    let horario = '13:34'
    
    postagem = {
        conteudo: content,
        nome: name,
        horario: horario,
    }
    posts.push(postagem)
    fecharModal()
}
let boxPost = document.querySelector('.post-boxes')




</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>