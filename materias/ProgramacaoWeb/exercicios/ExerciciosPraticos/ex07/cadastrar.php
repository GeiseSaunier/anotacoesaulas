<?php

	require_once "connect.php";

	$db = new db();
	$link = $db->conecta_mysql();

	if (isset($_POST['nome']))
	{
		$nome = addslashes($_POST['nome']);
		$sobrenome = addslashes($_POST['sobrenome']);
		$cpf = addslashes($_POST['cpf']);
		$senha = addslashes($_POST['senha']);
		$confirmarSenha = addslashes($_POST['confSenha']);

		if(!empty($nome) && !empty($sobrenome) && !empty($cpf) && !empty($senha) && !empty($confirmarSenha))
		{
			$sql  = "  INSERT INTO usarios(nome, sobrenome, cpf, senha) VALUES('$nome', '$sobrenome', '$cpf', '$senha') ";
	
			$registro = mysqli_query($link, $sql);
	
			if(!$registro)
			{
				die("Erro ao registrar no banco de dados");
			} else {
				header('Location: cadastroSucesso.php?cadastro=sucesso');
			}
		} else {
			header('Location: cadastrar.php?cadastro=1');
		}
	}
?>


<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar</title>
		<link rel="stylesheet" href="CSS/estilo.css"/>
	</head>

	<body>
		<div id="corpo-form-cad">
		<?$cad = 0; $cad = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0; if($cad== 1) { ?>
			<h1 style="color:red;">Erro ao validar formulário</h1>
		<? } ?>
		<h1>Entrar</h1>
			<form method="POST" action="cadastrar.php"> 
				<input type="text" name="nome" placeholder="Nome" maxlenght="30"/> 
				<input type="text" name="sobrenome" placeholder="Sobrenome"  maxlenght="50"/>
				<input type="cpf" name="cpf" placeholder="Cpf do usuario"  maxlenght="11"/>
				<input type="password" name="senha" placeholder="senha"  maxlenght="15"/>
				<input type="password" name="confSenha" placeholder=" confirmar senha"  maxlenght="15"/>
				<input type="submit" value="Cadastrar"/>
			</form>    
		</div>	
	</body>
	
</html>