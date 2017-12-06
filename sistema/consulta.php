<?php
	$id = $_POST['id'];
	$supostaSenha = md5($_POST['senha']);

ini_set( 'display_errors', true );
error_reporting( E_ALL );


echo "<link rel='stylesheet' type='text/css' href='estilo.css'";
echo '<div id="barra">
   <center><h1><font face="Purisa"><div id = "titulo">Fernando imagens  </div></center></font></h1>';


        $mysqli = new mysqli("localhost","root","","teste")or die(	"Deu ruim");


	$senhareal = $mysqli->query ("SELECT `senha` FROM `sistema` WHERE id = $id")->fetch_object()-> senha;
  //     echo "<br>" . $senhareal ;

	if ($supostaSenha == $senhareal) {
			$nome = $mysqli->query ("SELECT `nome` FROM `sistema` WHERE id = $id")->fetch_object()-> nome;
			echo "Seu nome é; <br> " . $nome;
			
			$foto = $mysqli->query ("SELECT `foto` FROM `sistema` WHERE id = $id")->fetch_object()-> foto;
			echo " <br>A foto que você escolheu é: <br> <img src = '../img/" . $foto . "'>";

		
	} else {
		echo "Erro no login ou na senha, favor tente realizar novamente o login";
	}
	

?>