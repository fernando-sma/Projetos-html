<?php 
$CO = $_POST ["CO"] ;
$CA = $_POST ["CA"] ;
echo "<meta charset = 'utf-8'>";
echo "<body bgcolor = 'darkgreen'>";
$hipotenusa = sqrt(($CO*$CO) + ($CA*$CA));

echo "o tamanho da hipotenusa é " . $hipotenusa;


 ?>