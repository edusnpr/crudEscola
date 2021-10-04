<?php
 require_once 'conecta_banco.php';
 $id = $_GET["id"];
 $sql = "select id,nome,sexo, mensalidade from alunos where id = " . $id;
 echo $sql;
 echo "<br><br>";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $recordSet = $stmt->fetchAll();
 $id = $recordSet[0]["id"];
 $nome = $recordSet[0]["nome"];
 $sexo = $recordSet[0]["sexo"];
 $mensalidade = $recordSet[0]["mensalidade"];
?>
<html>
<head>
 <title>Alterar Usuário</title>
</head>
<body>
 <a href='listarUsuarios.php'>Listar</a>
 <h2>Alterar Aluno</h2>
 <form action="alteraralunoOK.php" method="post">
 <label for="nome">Id:</label>
 <input type="hidden" class="form-control" id="id" placeholder="" name="id"
 value="<?php echo $id; ?>">
 <br><br>
 <label for="nome">Nome:</label>
 <input type="text" class="form-control" id="nome" placeholder="Digite nome" 
name="nome"
 value="<?php echo $nome; ?>">
 <br><br>
 <label for="sexo">Sexo:</label>
 <input type="text" class="form-control" id="sexo" placeholder="Digite Sexo" 
name="sexo"
 value="<?php echo $sexo; ?>">
 <br><br>
 <label for="mensalidade">Mensalidade:</label>
 <input type="text" class="form-control" id="mensalidade" placeholder="Digite mensalidade" 
name="mensalidade"
 value="<?php echo $mensalidade; ?>">
 <br><br>
 <button type="submit">Enviar</button>
 </form>
 </div>
</body>
</html>

