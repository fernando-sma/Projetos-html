<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$senhac = md5($senha);

	$mysqli = new mysqli("localhost","root","","teste");
	@$conferir = $mysqli->query ("SELECT `senha` FROM `biblioteca` WHERE `nome` = '$nome'")->fetch_object()-> senha;



	if ($senhac == $conferir) {
		include("inicial.php");
		$cookie_name = "user";
		$cookie_value =  $nome;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}else{
		echo "Login ou senha errados";
	}

?>