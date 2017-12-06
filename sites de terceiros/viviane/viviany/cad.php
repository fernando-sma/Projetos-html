<?php 

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$idade=$_POST['idade'];
$materia=$_POST['materia'];
$senha2=$_POST['senha2'];
if ($senha==$senha2) {

	
}else{
	$message = "As senhas não coincidem";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'> window.location = 'cadastro.html';</script>";

}



//$b= " INSERT INTO usuarios(usuario,senha,idade,materia) VALUES ('$usuario', '$senha', '$idade',$materia)";
//mysql_query($b)or die(mysql_error());

 ?>