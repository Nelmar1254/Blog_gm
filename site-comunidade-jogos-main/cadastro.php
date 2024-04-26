<?php
//incluindo o arquivo de conexão
include('connect.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Preparando a declaração SQL
    $stmt = $mysqli->prepare("INSERT INTO users (nome, email, senha) VALUES (?,?,?)");
    //prepared statements usa ? e depois insere os valores 
    $stmt->bind_param("sss", $nome, $email, $senha);

    // Executando a declaração
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $mysqli->error;
    }

    // Fechando a declaração e a conexão
    $stmt->close();
    $mysqli->close();
  }
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
