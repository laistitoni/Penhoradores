<!DOCTYPE html>
<?php
session_start();
include 'conn.php';
    if($_SESSION['Logado'] != 1){

    echo "<script>alert('Efetue login para enviar seu texto');</script>";
    header('Location: entrar.php');
}
?>
<html lang="pt-br">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>

    <div class="cabeçalho">
   <h1>Penhoradores de Texto</h1> 
   </div>
<ul class="menu">
        <li><a href="index.php">Inicio</a></li> |
        <li><a href="envie.php">Envie seu texto</a></li> |
        <li><a href="entrar.php">Entrar</a></li>
    </ul>
    
    <div class="corpo"> 
        <span>
   
        <div id="c1" class="coluna">
 
          </div>
        <div id="c1" class="coluna">
 <div id="compartilhe">
<h2>Compartilhe seu texto conosco</h2>
<hr><br>
<form action="visualizar.php" method="POST">
<input type="text" name="titulo" style="width:50%" autofocus placeholder="Título.."><br><br>
<input type="text" name="autor" style="width:50%" autofocus placeholder="Autor.."><br><br>
<textarea name="texto" autofocus placeholder="Texto.."></textarea><br><br>
<input type='submit' value='Enviar' name='enviar'>
<input type='submit' value='Visualizar' name='visualizar'>
</form>


</div>
  </div>
       </span>
 
   </div>
  <div class="rodape">
      <form  action='formulario.php' method='POST'> 
      <h4> fale conosco:</h4>
      <input type='email' value="Email" name='email-contato'> <br>
      <input type='text'value="Mensagem" name='mensagem-contato'> <br>
      <input type='submit' value='Enviar' name='botao-contato'>
      </form> 
      <div class="btn-group">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="facebook.png"></a>
      <a href="https://www.twitter.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="twitter.png"></a>
      </div>
     <h6 class="x">Desenvolvido por: Laís, Guilherme Gomes e Guilherme Kraemer </h6>
  </div>
</body>
</html>
