<?php
session_start();
include 'conn.php';

//cadastra usuário
if (isset($_POST["botao-cadastro"])){
$emailc=$_POST["email-cadastro"];
$nomec = $_POST['nome-cadastro'];
$senhac = md5($_POST["senha-cadastro"]);
$inserirc = "INSERT INTO usuario(email, nome, senha)
VALUES('".$emailc."','".$nomec."','".$senhac."')";
$resultc = mysqli_query($conn1, $inserirc);
header('Location: entrar1.php');
}
//verifica cadastro
if (isset($_POST["botao-entrar"]) ){
$_SESSION['emaile'] = $_POST['email-entrar'];
$_SESSION['senhae'] = md5($_POST["senha-entrar"]);
$x ='SELECT * FROM usuario WHERE email = "'.$_SESSION["emaile"].'"'.'
AND  senha ="'.$_SESSION["senhae"].'"';
$resultx = mysqli_query($conn1,$x);
if(mysqli_num_rows($resultx) > 0){
    $_SESSION['Logado'] = 1;
    header('Location: envie.php');
}else{
    echo "<script>alert('oops! algo deu errado, tente novamente');</script>";
    header('Location: entrar.php');
}

}
//verifica adm
if (isset($_POST["botao-adm"]) ){
$emaila = $_POST['email-adm'];
$senhaa = $_POST["senha-adm"];
if(($emaila=="leo@gmail.com"||$emaila ==
"marcelo@gmail.com"||$emaila== "airton@gmail.com"
)&&($senhaa=="leo123"||$senhaa== "marcelo123"||$senhaa==
"airton123")){
    header('Location: adm.php');
}else{
    echo "<script>alert('oops! algo deu errado, tente novamente');</script>";
    header('Location: entrar.php');
}
}

//fale conosco
if (isset($_POST["botao-contato"])){
$emailcon = $_POST['email-contato'];
$mensagemcon = $_POST['mensagem-contato'];
$inserir = "INSERT INTO mensagem(email, mensagem)
VALUES('".$emailcon."','".$mensagemcon."')";
$result1 = mysqli_query($conn1, $inserir);
echo "<script>alert('Agradecemos sua mensagem');</script>";
header('Location: index.php');

}

//adciona textos na pagina inicial
if (isset($_POST["enviar-adm"])){
$aut=$_POST["autor-adm"];
$tit = $_POST['titulo-adm'];
$text = $_POST["texto-adm"];
$ins = "INSERT INTO texto(autor, titulo, texto)
VALUES('".$aut."','".$tit."','".$text."') ";
$resultado = mysqli_query($conn1, $ins);
$ins1 = " DELETE FROM texto_enviado WHERE titulo='". $tit."'";
$resultado1 = mysqli_query($conn1, $ins1);
header('Location: textos.php');
}

?>