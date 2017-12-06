<!DOCTYPE html>
<?php
include 'conn.php';
//pega texto
if (isset($_POST["enviar"]) ){
$autor = $_POST['autor'];
$titulo = $_POST["titulo"];
$texto = $_POST['texto'];
$x = "INSERT INTO texto_enviado(autor, titulo, texto) VALUES('".$autor."','".$titulo."','".$texto."')";
$resultx = mysqli_query($conn1,$x);
echo "<script>alert('Agradecemos sua colaboração');</script>";
header('Location: index.php'); 
}

if (isset($_POST["visualizar"]) ){
$autor1 = $_POST['autor'];
$titulo1 = $_POST["titulo"];
$texto1 = $_POST['texto'];
}
?>
<html lang="pt-br">
<head>
  <title>Penhoradores</title>
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
 <h2> Textos</h2>
 <hr>
 <?php
 echo "<h4>$titulo1</h4>$texto1<br> $autor1<br>";
 ?>
 </div>
         <div id="c2" class="coluna">
              <h2> Textos</h2>
               <hr>
                    <h4>Cadê você?</h4>
Cadê você aqui na minha cama ?
Cadê você para me dar segurança ?
Não está longe, não está perto
Distante como as areias do deserto

O espaço não se pode medir
No tempo não se pode interferir
Não importa a distância e nem o tempo
Você me completa em todos os momentos

Por vezes, me sinto sem nada
Uma sensação que me cala
Depois disso acontecer
Eu tento aprender

Solitário, eu e meus pensamentos
Me trazem os meus sentimentos
Tudo o que eu faço ou tudo que faria
Só tem um motivo, a sua alegria

Seguro, solitário ou mesmo ninguém
Não sei o que poderia acontecer
Se eu não tivesse você
         </div></span>
 </div>
 
 

   
 <footer>
  <div class="footer">
  <div class="container">
  <div class="row">
  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">         
  </div>
  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
    <h3> Siga-nos </h3>
      <ul class="social">
        <li> <a href="https://www.facebook.com/"><img src="fb.png"> <i class=" fa fa-facebook">   </i> </a> </li>
        <li> <a href="https://www.instagram.com/"><img src="insta.png"> <i class="fa fa-twitter">   </i> </a> </li>
        <li> <a href="https://twitter.com/login?lang=pt"><img src="tuit.png"> <i class="fa fa-google-plus">   </i> </a> </li>
      </ul>
  </div>
  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">  
  </div>
  <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
      <form  action='formulario.php' method='POST'> 
    <h3> Fale Conosco </h3>
      <ul>
        <li>
  <div class="input-append newsletter-box text-center">
      <input type="text" class="full text-center" placeholder="Email " name="email-contato">
      <input type="text" class="full text-center" placeholder="Mensagem " name="mensagem-contato">
  </div>
        </li>
      </ul>         
  </div>
  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
      <ul>
        <li>
  <div class="input-append newsletter-box text-center">
         <button class="btn  bg-gray pull-left" type="submit" name="botao-contato">Enviar<i class="fa fa-long-arrow-right"> </i> </button>
  </div>
        </li>
      </ul>         
  </div>
    </form> 
  </div>            
  </div> 
  </div>
  <div class="footer-bottom">
  
    <p class="dado"> Copyright © Penhoradores de Textos. All rights reserved. </p>
  <div class="pull-right">
      <ul class="nav nav-pills payments">
        <li><i class="fa fa-cc-visa"></i></li>
        <li><i class="fa fa-cc-mastercard"></i></li>
        <li><i class="fa fa-cc-amex"></i></li>
        <li><i class="fa fa-cc-paypal"></i></li>
      </ul> 
  </div>

  </div>
  </footer>
      
</body>
</html>


