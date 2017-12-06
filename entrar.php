<!DOCTYPE html>
<?php
session_start();
include 'conn.php';
?>
<html lang="pt-br">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shotcut icon" href="icone.png">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
    <div class="footer-top">
  
    <p class="dado"> <strong> Organizar em linhas pensamentos que até então eram a bagunça da mente. Transformar agonias em algo bom. Deixar fluir e registrar. Partilhar ideias e ideais. Escrever para libertar. Escrever por escrever. </strong></p>
  <div class="pull-right">
      <ul class="nav nav-pills payments">
        <li><i class="fa fa-cc-visa"></i></li>
        <li><i class="fa fa-cc-mastercard"></i></li>
        <li><i class="fa fa-cc-amex"></i></li>
        <li><i class="fa fa-cc-paypal"></i></li>
      </ul> 
  </div>

  </div>
       <div class="cabeçalho">
    
   <h1>Penhoradores de Textos</h1> 
   </div>
<ul class="menu">
        <li><a href="index.php">Inicio</a></li> |
        <li><a href="envie.php">Envie seu texto</a></li> |
        <li><a href="entrar.php">Login</a></li>
    </ul>
    
    <div class="corpo"> 
        <span>
   
        <div id="c1" class="coluna">
 
 <form  action='formulario.php' method='POST'> 
    <h2> Cadastre-se </h2>
      <ul>
        <li>
  <div class="input-append newsletter-box text-left">
     Email: <input type="email" class="full text-center" name="email-cadastro">
     Nome: <input type="text" class="full text-center" name="nome-cadastro">
     Senha: <input type="password" class="full text-center" name="senha-cadastro">
     <input type="submit"  class="btn  bg-gray pull-left1" value="Cadastrar" name="botao-cadastro">
  </div>
        </li>
      </ul>         
  </div>

          </div>
        <div id="c2" class="coluna">
<form  action='formulario.php' method='POST'> 
    <h2> Login </h2>
      <ul>
        <li>
  <div class="input-append newsletter-box text-left">
     Email: <input type="email" class="full text-center" name="email-entrar">
     Senha: <input type="password" class="full text-center" name="senha-entrar">
     <input type="submit"  class="btn  bg-gray pull-left1" value="Login" name="botao-entrar">
  </div>
        </li>
      </ul>       

     <br>
     <br>
<form  action='formulario.php' method='POST'> 
    <h4><u> Área do administrador </u></h4>
      <ul>
        <li>
  <div class="input-append newsletter-box text-left">
     Email: <input type="text" class="full text-center" name="email-adm">
     Senha: <input type="password" class="full text-center" name="senha-adm">
     <input type="submit"  class="btn  bg-gray pull-left1" value="Login" name="botao-adm">
  </div>
        </li>
      </ul>  

        </form>  
  </div>
       </span>
 
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
        </form> 
</body>
</html>