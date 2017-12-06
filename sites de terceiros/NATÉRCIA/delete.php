<?php

$cpf = $_POST["cpf"];

include ("conecta.php");

$sql = "DELETE FROM `professores` WHERE cpf = '$cpf'";
$query = $mysqli->query($sql);
echo "O registro foi deletado com sucesso!";

?>