<?php

$nome 		= $_POST["NOME"];
$senha 		= $_POST["SENHA"];


if ($nome =="") {
	die("O NOME  NAO FOI INFORMADO!");
}

if ($senha=="") {
	die("Senha NAO FOI INFORMADO");
}

	echo 	 "<h2>Cadastro</h2>";
	echo "Nome: <b>$nome</b> <br>";
	echo "Email: <b>$senha</b> <br>";
	

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "projetoX") or die("erro na abertura do banco:". mysqli_error($con));

$sql = "insert into usuario (nome,email) 
values ('$nome','$senha')";
	mysqli_query($con, $sql) or die("ERRO NA INSERÇÃO DE DADOS". mysqli_error($con));
	echo "CADASTRO REALIZADO COM SUCESSO";
?>