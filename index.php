<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Cesar Szpak">
        <title>Login</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css\basiclogin.css" rel="stylesheet">
    </head>
    <body>
		<div class="wrapper fadeInDown">
		 <div id="formContent">
		<!-- Criado o formulário para o usuário colocar os dados de acesso.  -->
        <form method="POST" action="ope.php">
            <input type="text" name="login" placeholder="user" id="login" class="fadeIn second" required autofocus>
            <input type="password" name="senha" placeholder="Senha"  id="password" class="fadeIn third" required>
            <button type="submit" class="btn btn-info" class="fadeIn fourth" style="margin: 10px;">Acessar</button>
        </form>

		</div>
		</div>
        </p>
    </body>
</html>