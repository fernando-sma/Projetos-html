<?php

$nome = $_POST["nome"];


echo "<meta charset = 'utf-8'>";
include ("conecta2.php");

echo "<body background='eu.jpg'>";
	$sql =mysql_query("SELECT * FROM animais WHERE nome like '$nome%'");




echo "<br><br><br><br>";
echo "<table  border='1'><tr><td><b>Nome</td><td><b>Especie</td><td><b>Idade</td></tr></b>";	
	while($linha = mysql_fetch_array($sql)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
		{ 
		echo "<tr><td><font size='3' color = 'aqua'>" . 
			$linha["nome"] . "</td><td> <font color = 'aqua'>" .
			$linha["especie"] . "</td><td> <font color = 'aqua'>" .			
			$linha["idade"] . "</td></tr> <font color = 'aqua'>"; 
		} // Retorna para o início do loop caso existam mais registros a serem mostrados

echo "</table>";


?>