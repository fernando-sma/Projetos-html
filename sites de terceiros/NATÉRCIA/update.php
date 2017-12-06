<?php
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$materia=$_POST['materia'];
$salario=$_POST['salario'];
include ("conecta.php");
echo "<meta charset= 'utf-8'>";

echo "O cpf é" . $cpf;
echo "O nome é" . $nome;
echo "a materia é" . $materia;
echo " o salario é " . $salario ;

$codigo="UPDATE `professores` SET `nome`= '$nome',`materia`='$materia',`salario`=$salario WHERE cpf=$cpf";
$query =$mysqli->query($codigo);
 ?>