<?php

require_once('db.class.php');

$nome = $_POST['nome'];
$secretaria = $_POST['secretaria'];
$endereco = $_POST['endereco'];
$crm = $_POST['crm'];
$dn = $_POST['dn'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];

$objDb = new db();
$link = $objDb -> conecta_mysql();

$sql = "INSERT INTO usuarios(nome, endereco, secretaria, especialidade, dn, crm, telefone)
VALUES('$nome', '$endereco', '$secretaria', '$especialidade' , '$dn', '$crm', '$telefone')";

if(mysqli_query($link, $sql)){

  //echo '<script>alert("Médico registrado com sucesso!")</script>';

  header("Location: localhost:4433/cadastro/inscreva_se.php");

} else{

  //echo '<script>alert("Erro ao cadastrar o médico!")</script>';

  header("Location: localhost:4433/cadastro/inscreva_se.php");

}

?>