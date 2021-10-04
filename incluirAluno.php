<html>
<head>
 <title>Incluir Usuário</title>
</head>
<body>
 <a href='listaralunos.php'>Listar</a>
 <h2>Incluir novo usuário</h2>
 <form action="incluirAlunoOK.php" method="post">
 <label for="nome">Nome:</label>
 <input type="text" class="form-control" id="nome" placeholder="Digite nome" 
name="nome">
 <br><br>
 <label for="sexo">Sexo:</label>
 <input type="text" class="form-control" id="sexo" placeholder="Digite Sexo (m ou f)" 
name="sexo">
 <br><br>
 <label for="mensalidade">Nome:</label>
 <input type="text" class="form-control" id="mensalidade" placeholder="Digite mensalidade (000,00)" 
name="mensalidade">
 <br><br>
 
 <br><br>
 <button type="submit">Enviar</button>
 </form>
 </div>
</body>
</html>