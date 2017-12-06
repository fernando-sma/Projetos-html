<?php
$imagem = $_FILES["imagem"];
$h = "localhost";
$u = "root";
$s = "";
$db = "test";

	$nomefinal = time() . '.jpg';
	if(move_uploaded_file($imagem['tmp_name'], $nomefinal)){
		$tamanho = filesize($nomefinal);

		
		$mysqlimg = addslashes(fread(fopen($nomefinal, "r"), $tamanho));
		$mysqli = new mysqli("localhost","root","","test");
		$mysqli->query("INSERT INTO pessoa (img) VALUES ('$mysqlimg')");
		unlink($nomefinal);



	}


?>