<?php

$nome = $_POST["nome"];
$especie = $_POST["especie"] ;
$idade = $_POST["idade"] ;
echo "<meta charset = 'utf-8'>";
include ("conecta.php");
echo "<body background='eu.jpg'>";
$sql = "INSERT INTO `animais`(`nome`, `especie`, `idade`) VALUES('$nome','$especie','$idade')";
$query = $mysqli->query($sql);

echo "<font color = 'aqua'>
Foi inserido
";

?>