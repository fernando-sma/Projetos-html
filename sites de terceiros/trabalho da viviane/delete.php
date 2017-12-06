<?php

$id = $_POST["id"];

include ("conecta.php");
echo "<img src = 'logo.png'>";
$sql = "DELETE FROM `produtos` WHERE id = '$id'";
$query = $mysqli->query($sql);
echo "O registro foi deletado com sucesso!";

?>