<?php
include 'conn.php';
//envia mensagem
       // $inserir = "INSERT INTO mensagem(email, mensagem) VALUES('".$email."','".$mensagem."')";
	//$result = mysqli_query($conn1,$inserir);

//cadastra usuário
if (isset($_POST["botao-cadastro"])){
$emailc=$_POST["email-cadastro"]; 
$nomec = $_POST['nome-cadastro'];
$senhac = md5($_POST["senha-cadastro"]); 
$inserirc = "INSERT INTO usuario(email, nome, senha) VALUES('".$emailc."','".$nomec."','".$senhac."')";
$resultc = mysqli_query($conn1, $inserirc);
include 'entrar1.php';
}

//verifica cadastro
if (isset($_POST["botao-entrar"]) ){
$emaile = $_POST['email-entrar'];
$senhae = md5($_POST["senha-entrar"]);
$x ="SELECT * FROM usuario WHERE email = '$emaile'";
$resultx = mysqli_query($conn1,$x);
$y ="SELECT * FROM usuario WHERE senha = '$senhae'";
$resulty = mysqli_query($conn1,$y);
if((mysqli_num_rows($resultx) > 0) && (mysqli_num_rows($resulty) > 0)){  
    session_register("MeuSite"); $_SESSION["usuarioLogado"] = 1;
    include 'envie.php';
}

}
//verifica adm 
if (isset($_POST["botao-adm"]) ){
$emaila = $_POST['email-adm'];
$senhaa = $_POST["senha-adm"];
if(($emaila=="leo@gmail.com"||$emaila== "marcelo@gmail.com"||$emaila== "airton@gmail.com" )&&($senhaa=="leo123"||$senhaa== "marcelo123"||$senhaa== "airton123")){    
    include 'adm.php';
}
}

//fale conosco
if (isset($_POST["botao-contato"])){
$emailcon = $_POST['email-contato'];
$mensagemcon = $_POST['mensagem-contato'];
$inserir = "INSERT INTO mensagem(email, mensagem) VALUES('".$emailcon."','".$mensagemcon."')";
$result1 = mysqli_query($conn1, $inserir);
echo "<script>alert('Agradecemos sua mensagem');</script>";
include 'index.php';

}

//pega texto
if (isset($_POST["enviar"]) ){
$autor = $_POST['autor'];
$titulo = $_POST["titulo"];
$texto = $_POST['texto'];
$x = "INSERT INTO texto(autor, titulo, texto) VALUES('".$autor."','".$titulo."','".$texto."')";
$resultx = mysqli_query($conn1,$x);
echo "<script>alert('Agradecemos sua colaboração');</script>";
include 'index.php';
}
?>

