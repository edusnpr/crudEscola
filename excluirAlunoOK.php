<?php
require_once 'conecta_banco.php';
print_r($_GET);
echo "<br><br>";
$id = $_GET["id"];
echo "id que chegou = " . $id;
$sql = "delete from alunos where id = " . $id;
echo $sql;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: listaralunos.php');
?>
