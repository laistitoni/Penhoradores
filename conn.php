<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_penhoradores";


$conn = mysqli_connect($servername, $username, $password);
if(mysqli_connect_error()){
	printf("<br> Não foi possível conectar");
	printf("<br> Erro: %s\n", mysqli_connect_error());
	exit();
}

$sql = "CREATE DATABASE IF NOT EXISTS banco_penhoradores";
   
  if (mysqli_query($conn, $sql)) {
    }else {
          echo "Erro ao criar o database: ".mysqli_error($conn);
  }   
mysqli_close($conn);

$conn1 = mysqli_connect($servername, $username, $password, $dbname);

$sql1 = "CREATE TABLE IF NOT EXISTS usuario (
        email VARCHAR (40) NOT NULL,
  	nome VARCHAR (30) NOT NULL,
        senha VARCHAR(32) NOT NULL)";
  	if (mysqli_query($conn1, $sql1)) {
  	}else {
  		echo "Error na criação da tabela: ".mysqli_error($conn1);
  	}

$sql2 = "CREATE TABLE IF NOT EXISTS mensagem (
email VARCHAR(50) NOT NULL,
mensagem VARCHAR(500) NOT NULL)";
    if (mysqli_query($conn1, $sql2)) {
    }else {
      echo "Error na criação da tabela: ".mysqli_error($conn1);
    }
    
$sql3 = "CREATE TABLE IF NOT EXISTS texto (
autor VARCHAR(50) NOT NULL,
titulo TEXT NOT NULL,
texto TEXT NOT NULL)";
    if (mysqli_query($conn1, $sql3)) {
    }else {
      echo "Error na criação da tabela: ".mysqli_error($conn1);
    }
    

?>
