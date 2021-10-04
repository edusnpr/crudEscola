<?php
$servername= "localhost";
$username= "root";
$password="";
$dbname = "escola";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("SELECT id, nome, sexo, mensalidade FROM alunos");
    $stmt->execute();
    $recordSet = $stmt->fetchAll();
    //var_dump($res);
    // listar os dados 
    echo "<h1>Escola</h1><br>Nomes dos Alunos<br>";
    foreach($recordSet as $k=>$v) {
    echo "<br>" . $v['nome'];
    }
   } catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
   }
   $conn =  null;
   ?>