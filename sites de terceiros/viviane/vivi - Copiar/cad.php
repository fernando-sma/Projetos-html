<?php 
$h = "127.0.0.1";$u = "root";$p = "";$b = "usuarios";$a = mysqli_connect($h,$u,$p,$b);
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$materia=$_POST['materia'];
$senha2=$_POST['senha2'];
if ($senha==$senha2) {
mysqli_query($a,"INSERT INTO usuarios(usuario,email,senha,materia) VALUES ('$usuario','$email', '$senha','$materia')")or die(mysqli_error());
header('Location:perfil.html');
}else{
	$message = "As senhas não coincidem";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'> window.location = 'cadastro.html';</script>";
	}
 ?>