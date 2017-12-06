<?php
$id = $_POST ["id"];
$nome = $_POST["nome"];
$especie = $_POST["especie"] ;
$idade = $_POST["idade"] ;
echo "<meta charset = 'utf-8'>";
include ("conecta.php");
echo "<body background='eu.jpg'>";
$sql = "UPDATE `animais` SET `nome`= '$nome', `especie`='$especie', `idade`= $idade WHERE id = $id";
$query = $mysqli->query($sql);
echo " <font color='aqua'>";
echo " O animal " . $nome . " foi editado com sucesso <br>";

echo  "Nome do individuo : " . $nome . "<br>";
echo "idade do animal: " . $idade . "<br>" ;
echo "Especie em questão " .$especie . "<br>";


?>