<?php

require_once 'conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$mensalidade = $_POST["mensalidade"];
//monta sql para o banco de dados ,
$sql = "INSERT INTO alunos (nome, sexo, mensalidade) VALUES ('" . $nome . "','" . $sexo ."','" . $mensalidade ."')";
echo $sql;
echo "<br><br>";
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: listaralunos.php');
?>