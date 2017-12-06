<?php


ini_set( 'display_errors', true );
error_reporting( E_ALL );


$arg= $_POST["arg"] ;
$escolha = $_POST["escolha"];

echo "<MARQUEE DIRECTION=right><img src = 'logo.png'> </MARQUEE>";

echo "<meta charset = 'utf-8'>";
include ("conecta2.php");

echo "Você escolheu " . $escolha;

if($escolha =="nome"){

$sql =mysql_query("SELECT * FROM produtos WHERE nome like '$arg%' ");


}else{

	$sql =mysql_query("SELECT * FROM produtos WHERE id = '$arg' ");

}



//$sql =mysql_query("SELECT * FROM produtos WHERE nome = '$arg' ");



echo "<br><br><br><br><center>";
echo "<table  border='1'><tr><td><b>Nome</td><td><b>Quantidade</td><td><b>Preço</td></tr></b>";	
	while($linha = mysql_fetch_array($sql)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
		{ 
		echo "<tr><td><font size='3' color = 'red'>" . 
			$linha["nome"] . "</td><td><font size='3' co/lor = 'red'>" .
			$linha["qtd"] . "</td><td>" .			
			$linha["preco"] . "</td></tr>"; 
		} // Retorna para o início do loop caso existam mais registros a serem mostrados

echo "</table></center>";


?>