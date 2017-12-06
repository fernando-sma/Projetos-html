<?php
$val1 = $_POST ['val1'];
$divisor = 2;
$verdade = 0;
while ($val1 > $divisor){

if(($val1%$divisor)==0){

echo "este número não é primo <br>";
$verdade = 1;
$divisor = $val1;
}
$divisor++;

}

if(($verdade = 0)){

echo "ele é primo";
}
?>