<?php

ini_set( 'display_errors', true );
error_reporting( E_ALL ); 	

$nome = $_POST['nome'];
$senhaa = $_POST['senhaa'];
$senhab = $_POST['senhab'];
$senhac =  md5($senhaa);
echo $nome . "<br>";
echo $senhac;

if ($senhaa == $senhab) {

	$mysqli = new mysqli("localhost","root","","teste");
	@$unico = $mysqli->query ("SELECT `nome` FROM `biblioteca` WHERE `nome` = '$nome'")->fetch_object()-> nome;

if ($unico == null) {
		$mysqli->query("INSERT INTO `biblioteca`(`nome`, `senha`) VALUES ('$nome','$senhac')");
		mkdir("usr/" . $nome );

		} else {
		echo "<script> alert('O nome de usuario já existe'); </script>";
	}
	
	



}else{
	echo "<script>alert('as senhas não coincidem');</script>";
}





?>
