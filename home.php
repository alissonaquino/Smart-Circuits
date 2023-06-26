<?php 
session_start();
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">

    <title>Home - Smart Circuits</title>
    
</head>
<body>
    <nav>
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="sistemasnumeracao.php">Documentações</a></li>
        <?php
        if( (isset($_SESSION['email'])) && $_SESSION['email'] != ""){
       echo " <li><a href='perfil2.php'>Perfil</a></li> ";
        }else{
          echo " <li><a href='login.php'>Login/Cadastro</a></li> ";
        }
        ?>
        <li><a href="player.html">Estudos</a></li>
        <li><a href="forum.php">Fórum</a></li>
        </ul>
    </nav>
    
     
    <section class="wellcome">
      <div class="image">
      <img src="imagens/logosmartcircuits.png" alt="img-logo">
    </div>
        
       
        <h1>Nós da Smart Circuits temos o prazer de receber você por aqui!</h1>
        <p>Buscando uma oportunidade de interação de aprendizado a Smart Circuits foi criada a partir deste pensamento. Ensinar e aprender é uma coisa de suma importância para nossa equipe, que visa uma melhoria na capacitação e no aprendizado de pessoas, aqui você encontrará diferentes formas de aprender e até mesmo de tirar duvida com outras pessoas.</p>
        <ul>
          <li>
            <img src="imagens/web-chat.png" alt="img1">
            <h3>Fórum</h3>
            <p>Nosso fórum é uma área onde você pode tirar dúvidas com outros usuários e ter um estudo coletivo, podendo aprimorar seus conhecimentos. </p>
            <a href="forum.php">Começar</a>
        </li>
          <li>
            <img src="imagens/web-chat.png" alt="img2">
            <h3>Quizzes</h3>
            <p>Área dos quizzes é uma área onde você pode treinar o seu conhecimento com perguntas de outras pessoas e até criar a suas.</p>
            <a href="quizzes.php">Começar</a>
        </li>
          <li>
            <img src="imagens/estude.png" alt="img3">
            <h3>Estudos</h3>
            <p>Para os estudos temos nossa própria área de estudos com documentções que podem te dar o conhecimento necessário.</p>
            <a href="player.html">Começar</a>
        </li>
        </ul>
        
    </section>
    <section class="informacoes reveal">
     <div class="conteudo-text">
            <h2>Smart Circuits</h2>
            <h3>Rápido e de facil acesso, esse é o intuito!</h3>
            <p></p>
     </div>
     <div class="conteudo-image">
        <img src="imagens/imagephonefull2.png" alt="">
     </div>
    </section>
    <section class="sobre reveal">
        <h1>O que é a Smart Circuits?</h1>
        <h2>Qual nosso objetivo?</h2>
        <p>A Smart Circuis foi fundada por um grupo de alunos do Centro Universitário Salesiano de São Paulo no campus de Lorena. A partir de um projeto que consistia em ensinar e capacitar pessoas em circuitos lógicos. Somos uma equipe que visa um projeto que possa ajudar um público alvo que tem o interesse em portas lógicas, para que possam intensificar seu conhecimento na área de maneira prática, rápida e gratuita.</p>
        
    </section>
    <section class="final reveal">
        <h2>Seja mais um da familia Smart Circuits</h2>
        <p>Venha conosco e seja parte da nossa fámilia, aqui voce aprenderá de várias maneiras se capacitando e aprendendo mais a cada dia. Nossa meta é poder fazer com que você aprenda circuitos e para isso reunimos diversas maneiras que vão te atender no dia a dia, basta começar.  </p>
        <h3>Venha fazer parte da familia pequeno eletrizado</h3>
        <a href="">Começar Agora!</a>
    </section>
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
<script src="home.js"></script>
</html>
