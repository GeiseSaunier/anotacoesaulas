<?php

	if(isset($_POST['cpf']) && isset($_POST['senha']))
	{
		header('Location: index.php?erro=1');
	}

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	$success = isset($_GET['success']) ? $_GET['success'] : 0;

	

?>


<!DOCTYPE html>
<html lang="pt-br"> 

	<head>
		<meta charset="utf-8"/>
		<title> Login - Prog. Web</title>
		<link rel="stylesheet" href="CSS/estilo.css"/>
	</head>

	<body>
		<?php if($erro) {?>
				<h1 style="color:red">senha e/ou email inváldo</h1>
		<? } ?>
		<div id="corpo-form">
			<h1 style="color:#fff;">Entrar</h1>
			<form method="post" action="index.php"> 
				<input type="cpf" maxlength="11" placeholder="Cpf do usuario" name="cpf"/>
				<input type="password" placeholder="senha" name="senha"/>
				<input class="inputForm" type="submit" value="Acessar"/>
				<a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
			</form>    
		</div>
	</body>
</html>