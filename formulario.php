<?php
if (isset($_POST["botao1"])){
	$email = $_POST['email'];
	$mensagem = $_POST["mensagem"]; 
        $inserir = "INSERT INTO mensagem(email, mensagem) VALUES('".$email."','".$mensagem."')";
	$result = mysqli_query($conn1,$inserir);
}

if (isset($_POST["botao2"])){
$email=$_POST["email1"]; 
$nome = $_POST['nome'];
$senha = md5($_POST["senha"]); 
$inserir1 = "INSERT INTO usuario(email, nome, senha) VALUES('".$nome."','".$senha."')";
	$result1 = mysqli_query($conn1, $inserir1);

}



?>

