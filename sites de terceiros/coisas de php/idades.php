<?php
echo "<meta charset='utf-8'>";
$val1 = $_POST  ["val1"];
$val2 = $_POST  ["val2"];
$val3 = $_POST  ["val3"];
$val4 = $_POST  ["val4"];
$val5 = $_POST  ["val5"];
$val6 = $_POST  ["val6"];
$val7 = $_POST  ["val7"];
$val8 = $_POST  ["val8"];
$val9 = $_POST  ["val9"];
$val10 = $_POST ["val10"];



$maiores = 0;
$idade = array($val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10);
$cont = 0 ;


		for ($i=0; $i <= 9 ; $i++) { 
			if ($idade[$i]>=18) {
				$maiores++;
				
			}
		}
echo "o número de maiores de 18 é " . $maiores;

  ?>