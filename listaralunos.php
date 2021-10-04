<?php
require_once 'conecta_banco.php';
$stmt = $conn->prepare("SELECT id, nome, sexo, mensalidade FROM alunos");
$stmt->execute();
$recordSet = $stmt->fetchAll();
echo "<h1> LISTAR ALUNOS</h1>";
echo "<br><a href='incluirAluno.php'>Incluir</a>";
echo "<h2>Nomes dos Alunos</h2>";
foreach($recordSet as $k=>$v) {
echo "<a href='alterarAluno.php?id=".$v['id']."'>Alterar</a> ou <a 
href='excluirAlunoOK.php?id=".$v['id']."'>Excluir</a> --> " . $v['nome']."<br>";
}
?>