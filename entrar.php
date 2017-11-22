<!DOCTYPE html>
<?php
include 'conn.php';
?>
<html lang="en">
    
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="container">
  <div class="jumbotron">
    <h1>Penhoradores de Texto</h1> 
  </div>
 
<ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="envie.php">Envie seu texto</a></li>
        <li><a href="entrar.php">Login</a></li>
    </ul>
</div>
    <form action='formulario.php' method='POST' class="form-inline" >
    <div class="form-group ">
  Email:<input type="email" class="form-control" name="email1"> 
  Name:<input type="text" class="form-control" name="nome"> 
  Password:<input type="password" class="form-control"  name="senha">   
</div>
        <input type="submit" class="form-control" value="Cadastrar" name="botao2">
        </form>  
  <form action='formulario.php' method='POST' class="form-inline" >
  <div class="form-group ">
  Name:<input type="text" class="form-control" name="nome1"> 
  Password:<input type="password" class="form-control"  name="senha1">   
</div>
        <input type="submit" class="form-control" value="Entrarar" name="botao3">
        </form>  
    
    <nav class="nav navbar-right navbar-fixed-bottom">
  <div class="container">
           <form  action='formulário.php' method='POST'> 
           <h4> fale conosco:</h4>
      <input type='email' value="Email" name='emial'> <br>
      <input type='text'value="Mensagem" name='mensagem'> <br>
      <input type='submit' value='Enviar' name='botao1'>
      </form> 
      <div class="btn-group">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="facebook.png"></a>
      <a href="https://www.twitter.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="twitter.png"></a>
      </div>
     <h6 class="x">Desenvolvido por: Laís, Guilherme Gomes e Guilherme Kraemer </h6>
  </div>
</nav>
</body>
</html>