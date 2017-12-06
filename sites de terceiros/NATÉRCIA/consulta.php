<?php

echo "<meta charset='utf-8'>";
include ("conecta2.php");
$nome=$_POST['nome'];



												    

$resultado = mysql_query("SELECT * FROM professores where `nome` ='$nome' );
                         

						 
						 
echo "<br><br><br><br><center>";
echo "<table  border='1'><tr><td><b>Id</td><td><b>Nome</td><td><b>Telefone</td></tr></b>";	
	while($linha = mysql_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
		{ 
			echo "<tr><td><font size='3' color = 'red'>" . 
			$linha["cod_aluno"] . "</td><td><font size='3' co/lor = 'red'>" .
			$linha["nome_aluno"] . "</td><td>" .			
			$linha["fone_aluno"] . "</td></tr>"; 
		} // Retorna para o início do loop caso existam mais registros a serem mostrados

echo "</table></center>";


?>

</a>
<?php 

mysql_close($conn); // Fechamos a conexão com o banco de dados
?>
