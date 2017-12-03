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
 <form action='formulario.php' method='POST' >
  Email: <input type="email" name="email-cadastro"> <br>
  Nome: <input type="text"  name="nome-cadastro"> <br>
  Senha: <input type="password" name="senha-cadastro">  <br> 
  <input type="submit" value="Cadastrar" name="botao-cadastro">
         </form>  
          </div>
        <div id="c2" class="coluna">
  <form action='formulario.php' method='POST'>
  Email: <input type="email" name="email-entrar"> <br>
  Senha: <input type="password"  name="senha-entrar">   <br>
<input type="submit"  value="Entrar" name="botao-entrar">
        </form> 
     <br>
     <br> 
    <h4>Área do administrador</h4>
 <form action='formulario.php' method='POST'>
  Email: <input type="email" name="email-adm"> <br>
  Senha: <input type="password"  name="senha-adm">   <br>
<input type="submit"  value="Entrar" name="botao-adm">
        </form>  
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
      <a href="https://www.facebook.com"><img title="COMPARTILHAR" src="facebook.png"></a>
      <a href="https://www.twitter.com"><img title="COMPARTILHAR" src="twitter.png"></a>
      </div>
     <h6 class="x">Desenvolvido por: Laís, Guilherme Gomes e Guilherme Kraemer </h6>
  </div>
</body>
</html>