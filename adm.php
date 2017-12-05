
<!DOCTYPE html>
<?php
include 'conn.php';
$results_per_page = 10;

if(isset($_GET["page"])){
   $page=$_GET["page"];
 }else{
   $page=1;
}

$start_from =($page-1) * $results_per_page;
$sql4="SELECT * FROM banco.produto LIMIT $start_from, $results_per_page";
$rs_result = mysqli_query($conn1, $sql4);
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
            <h4> Mensagens </h4>
            <hr>
            <?php

$sql = "SELECT * FROM mensagem";
$query = mysqli_query($conn1,$sql);
while($sql = mysqli_fetch_array($query)){
$email = $sql["email"];
$nome = $sql["mensagem"];
echo "<br>$email <br> $nome <br>"; 
}
?> 
          </div>
        <div id="c2" class="coluna">
            <h4> Textos </h4>
            <hr>
             <?php

$sql = "SELECT * FROM texto";
$query = mysqli_query($conn1,$sql);
while($sql = mysqli_fetch_array($query)){
$titulo=$sql["titulo"];
$autor = $sql["autor"];
$texto = $sql["texto"];
echo "<br>$autor <br>$titulo <br> $texto <br> 
<form  action='formulario.php' method='POST'> 
      <br>
    <INPUT TYPE='checkbox' NAME='check'> 
      </form> ";
}
echo "<form  action='formulario.php' method='POST'> 
      <br>
    <INPUT TYPE='submit' NAME='botao-add' value='adcionar'> 
      </form> ";
?> 
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