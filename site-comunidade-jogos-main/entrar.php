<?php
 include('connect.php');

 if (isset($_POST['email']) || isset($_POST['senha'])) {
  if (strlen($_POST['email'] == 0)) {
    echo "Preencha o seu email";
  }elseif (strlen($_POST['senha'] == 0)) {
    echo "Preencha sua senha";
  }else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM  users WHERE email = '$email' AND senha = '$senha'";

    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);
    $quantidade = $sql_query->num_rows;
    
    if ($quantidade == 1) {
      $usuario = $sql_query->fetch_assoc();
       if (!isset($_SESSION)) {
        session_start();
       }
       $_SESSION['id'] = $usuario['id'];
       $_SESSION['name'] = $usuario['nome'];

       header("Location: home.php");
    }else {
      echo "<span style='color:white;'>Preencha seu email e sua senha</span>";
    }
  } 
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="entrar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
 <nav>
     <ul>
     <li><a href="home.php">INICIO</a></li>
     <li><a href="novidades.php">+JOGOS</a></li>
    </ul>
 </nav>   
    <span>COMUNIDADE<br>GAME</span>
    <form method="POST">
    <h1>ACESSE SUA CONTA</h1>
    <img src="assets/entrar1.png">
    <input type="email" name="email" autocomplete="off">
    <img src="assets/entrar2.png">
    <input type="password" name="senha">
    <input type="submit" value="ENTRAR">
    <a href="cadastro.php">REGISTRE-SE AGORA</a>
    </form>
</body>
</html>