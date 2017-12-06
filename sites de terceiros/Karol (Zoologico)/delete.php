<?php

$id = $_POST["id"];

include ("conecta.php");
echo "<body background='eu.jpg'>";
$sql = "DELETE FROM `animais` WHERE id = $id";
$query = $mysqli->query($sql);
echo " <font color = 'red'><h1>foi apagado";
echo "</body>";
?>