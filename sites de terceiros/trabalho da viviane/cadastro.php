<?php

$nome = $_POST["nome"];
$qtd = $_POST["qtd"] ;
$preco = $_POST["preco"] ;
echo "<meta charset = 'utf-8'>";
include ("conecta.php");

echo "<img src = 'logo.png'>";

$sql = "INSERT INTO `produtos`(`nome`, `qtd`, `preco`) VALUES('$nome','$qtd','$preco')";
$query = $mysqli->query($sql);

echo " O Produto " . $nome . " foi cadastrado com sucesso <br>";

echo  "Nome do Produto : " . $nome . "<br>";
echo "Preço do Produto : " . $preco . "<br>" ;
echo "Quantidade do Produto : " .$qtd . "<br>";


?>