<?php
include 'conn.php';
//envia mensagem
if (isset($_POST["botao1"])){
	$email = $_POST['email'];
	$mensagem = $_POST["mensagem"]; 
        $inserir = "INSERT INTO mensagem(email, mensagem) VALUES('".$email."','".$mensagem."')";
	$result = mysqli_query($conn1,$inserir);
}

//cadastra usuário
if (isset($_POST["botao2"])){
$email=$_POST["email1"]; 
$nome = $_POST['nome'];
$senha = md5($_POST["senha"]); 
$inserir1 = "INSERT INTO usuario(email, nome, senha) VALUES('".$email."','".$nome."','".$senha."')";
$result1 = mysqli_query($conn1, $inserir1);
        
}

//verifica cadastro
if (isset($_POST["botao3"]) ){
$nome1 = $_POST['nome1'];
$senha1 = md5($_POST["senha1"]);
$x ="SELECT * FROM usuario WHERE Nome = '$nome1'";
$resultx = mysqli_query($conn1,$x);
$y ="SELECT * FROM usuario WHERE senha = '$senha1'";
$resulty = mysqli_query($conn1,$y);
if((mysqli_num_rows($resultx) > 0) && (mysqli_num_rows($resulty) > 0)){    
echo "uhul ce entrou";
}}


?>

