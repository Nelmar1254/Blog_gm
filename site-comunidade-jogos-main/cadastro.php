<?php
include('connect.php');
 if (isset($_POST['submit'])) {
  
  

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $result ="INSERT INTO users (nome,email,senha) VALUES('$nome','$email','$senha', NOW()";

  header('Location: entrar.php');
 }

 if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome'])) {
  if (strlen($_POST['email'] == 0)) {
    echo "Preencha o seu email";
  }elseif (strlen($_POST['senha'] == 0)) {
    echo "Preencha sua senha";
  }else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
  } }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <link rel="stylesheet" href="cadastro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
 </head>
  <body>
    <nav>
        <ul>
         <li><a href="comunidade.php">COMUNIDADE</a></li>
         <li><a href="novidades.php">+JOGOS</a></li>
         <li><a href="home.php">INICIO</a></li>
       </ul>
    </nav>
    
    <form action="" method="POST">
    
     <h1>CADASTRE-SE</h1>

     <p>
        <label>NOME</label>
        <input type="text" name="nome">
     </p>
     <p>
       <label>EMAIL</label>
       <input type="email" name="email" autocomplete="off">
     </p>
     <p>
       <label>SENHA</label>
       <input type="password" name="senha">
     </p>
     <input type="submit" value="cadastrar">
    </p>
    </form>
  </body>
</html>
</html>