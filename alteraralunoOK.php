<?php
require_once 'conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$id = $_POST["id"];
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$mensalidade = $_POST["mensalidade"];
$sql = "UPDATE alunos SET nome = '" . $nome . "', sexo ='" . $sexo . "', mensalidade = '" . $mensalidade ."' 
WHERE id = " . $id;
echo $sql;
echo "<br><br>";
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: listaralunos.php');
?>