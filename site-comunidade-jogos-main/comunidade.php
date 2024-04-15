<?php

include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMUNIDADE</title>
    <link rel="stylesheet" href="comunidade.css">
    

</head>
<body>
    <nav>
     <ul>
     <li><a href="home.php">INICIO</a></li>
     <li><a href="novidades.php">+JOGOS</a></li>
     <li><a href="entrar.php">ENTRAR</a></li>
    </ul>
  </nav>
  <div id="largura-pagina">
  <section id="conteudo1">
    <h1>Bem-vindo(a) à nossa seção de comentários sobre jogos! Entre, compartilhe suas opiniões e junte-se à conversa sobre os seus games favoritos.</h1>
    <img src="assets/comunidade.webp" alt="">
    <img src="assets/comunidade2.webp" alt="">
    <img src="assets/comunidade 3.jpg" alt="">
    <h2>COMENTARIOS</h2>
   <form>
    <img src="assets/comentarios00.jpg">
    <textarea name="texto" placeholder="bate papo"></textarea>
    <input type="submit" value="PUBLICAR COMENTARIO">
   </form>
   <div class="area-comentario"> 
    <img src="assets/comentarios00.jpg">
    <h3>nome pessoa</h3>
    <h4>horaio e data <a href="">EXCLUIR</a></h4>
     <p>comentario pessoa</p>
   </div>
    </div>
   </section>
  
   
</body>
</html>