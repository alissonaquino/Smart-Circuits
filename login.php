<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class='area'>
        <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="container">
          <div class="buttonsForm">
            <div class="btnColor"></div>
            <button id="btnSignin" >Login</button>
            <button id="btnSignup" >Cadastro</button>
          </div>
       
          <form id="signin" method="POST" action="logar.php" >
              <input type="text" name="email"  placeholder="Digite seu Email" required>
              <input type="password" name="senha"  placeholder="Digite sua senha" required>
            <button type="submit">Entrar</button>
          </form>
    
          <form id="signup" method="POST" action="registrar.php">
          <input type="text"  name="nome" placeholder="Digite seu nome" required>
          <input type="email" name="email"  placeholder="Digite seu Email" >
          <input type="password" name="senha" placeholder="Digite sua senha" >
          <input type="password" name="senha2" placeholder="Confirme sua senha" >
            <button type="submit">Cadastrar</button>
          </form>
        </div> 
      </div>
      <script src="login.js"></script>
</body>
</html>