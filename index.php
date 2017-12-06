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
             
             <?php
             $results_per_page = 3;
if(isset($_GET["page"])){
   $page=$_GET["page"];
 }else{
   $page=1;
}

$start_from =($page-1) * $results_per_page;
$sql4="SELECT * FROM banco_penhoradores.texto LIMIT $start_from, $results_per_page";
$rs_result = mysqli_query($conn1, $sql4);
echo '<h2> Textos da semana</h2> 
    <hr>';
while($row = mysqli_fetch_array($rs_result, MYSQLI_NUM)){
				echo "
                                    
          <h4>$row[1]</h4>
         $row[2]<br><br>
             $row[0]<br><br>";}
$sql5 = "SELECT COUNT(autor) AS total FROM texto";
$result2= mysqli_query($conn1, $sql5);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$total_pages = ceil($row["total"]/$results_per_page);
for($i=1; $i<=$total_pages;$i++){
	echo "<a href= 'index.php?page=".$i."' style='text-decoration: none;'>  ".$i."</a>";
}
mysqli_free_result($rs_result);
mysqli_close($conn1);

             ?>         

 </div>
         <div id="c2" class="coluna">
              
         </div></span>
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
