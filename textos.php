<!DOCTYPE html>
<?php
include 'conn.php';
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
            
<?php
    $results_per_page = 4;
if(isset($_GET["page"])){
   $page=$_GET["page"];
 }else{
   $page=1;
}

$start_from =($page-1) * $results_per_page;
$sql4="SELECT * FROM banco_penhoradores.texto_enviado LIMIT $start_from, $results_per_page";
$rs_result = mysqli_query($conn1, $sql4);
echo '<h4> Textos </h4>
            <hr>';
while($row = mysqli_fetch_array($rs_result, MYSQLI_NUM)){
				echo "                                    
          <h4>$row[1]</h4>
         $row[2]<br><br>
             $row[0]<br><br>";}
$sql5 = "SELECT COUNT(autor) AS total FROM texto_enviado";
$result2= mysqli_query($conn1, $sql5);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$total_pages = ceil($row["total"]/$results_per_page);
for($i=1; $i<=$total_pages;$i++){
	echo "<a href= 'textos.php?page=".$i."' style='text-decoration: none;'>  ".$i."</a>";
}
mysqli_free_result($rs_result);
mysqli_close($conn1);

             ?>   
          </div>
        <div id="c2" class="coluna">
            <h4>Envie</h4>
            <hr>
 <form action="formulario.php" method="POST">
<input type="text" name="titulo-adm" style="width:50%" autofocus placeholder="Título.."><br><br>
<input type="text" name="autor-adm" style="width:50%" autofocus placeholder="Autor.."><br><br>
<textarea name="texto-adm" autofocus placeholder="Texto.."></textarea><br><br>
<input type='submit' value='Enviar' name='enviar-adm'>

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