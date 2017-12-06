<?php
$id = $_POST ["id"];
$nome = $_POST["nome"];
$qtd = $_POST["qtd"] ;
$preco = $_POST["preco"] ;
echo "<meta charset = 'utf-8'>";
include ("conecta.php");

echo "<img src = 'logo.png'>";
$sql = "UPDATE `produtos` SET `nome`= '$nome', `qtd`=$qtd, `preco`= $preco WHERE id = $id";
$query = $mysqli->query($sql);

echo " O Produto " . $nome . " foi editado com sucesso <br>";

echo  "Nome do Produto : " . $nome . "<br>";
echo "Preço do Produto : " . $preco . "<br>" ;
echo "Quantidade do Produto : " .$qtd . "<br>";


?>