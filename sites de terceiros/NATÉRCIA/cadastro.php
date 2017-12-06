<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"] ;
$materia = $_POST["materia"] ;
$salario = $_POST["salario"] ;
echo "<meta charset = 'utf-8'>";
include ("conecta.php");

$sql = "INSERT INTO `professores`(`nome`, `cpf`, `materia`, `salario`) VALUES('$nome','$cpf','$materia' ,'$salario')";
$query = $mysqli->query($sql);

echo " O Produto " . $nome . " foi cadastrado com sucesso <br>";

echo  "Nome do Professores : " . $nome . "<br>";
echo "cpf do professores : " . $cpf . "<br>" ;
echo "materia : " .$materia . "<br>";
echo "salario : " .$salario . "<br>";


?>