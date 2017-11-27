<?php
include 'conn.php';
//envia mensagem
       // $inserir = "INSERT INTO mensagem(email, mensagem) VALUES('".$email."','".$mensagem."')";
	//$result = mysqli_query($conn1,$inserir);

//cadastra usuário
if (isset($_POST["botao2"])){
$email=$_POST["email1"]; 
$nome = $_POST['nome'];
$senha = md5($_POST["senha"]); 
$inserir1 = "INSERT INTO usuario(email, nome, senha) VALUES('".$email."','".$nome."','".$senha."')";
$result1 = mysqli_query($conn1, $inserir1);
include 'entrar1.php';
}

//verifica cadastro
if (isset($_POST["botao3"]) ){
$email1 = $_POST['email3'];
$senha1 = md5($_POST["senha1"]);
$x ="SELECT * FROM usuario WHERE email = '$email1'";
$resultx = mysqli_query($conn1,$x);
$y ="SELECT * FROM usuario WHERE senha = '$senha1'";
$resulty = mysqli_query($conn1,$y);
if((mysqli_num_rows($resultx) > 0) && (mysqli_num_rows($resulty) > 0)){    
    include 'envie.php';
}}

if (isset($_POST["botao1"])){
$destinatario = "laisclesar@gmail.com";
$assunto = "fale conosco";
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

 // monta o e-mail na variavel $body
$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

echo 'agradecemos sua mensagem';

}
if (isset($_POST["enviar"]) ){
$autor = $_POST['autor'];
$titulo = $_POST["titulo"];
$texto = $_POST['texto'];
$x = "INSERT INTO texto(autor, titulo, texto) VALUES('".$autor."','".$titulo."','".$texto."')";
$resultx = mysqli_query($conn1,$x);
}
?>

