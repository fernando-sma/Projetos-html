<?php
$val1 = $_POST ['val1'];
$divisor = 2;
$verdade = 0;
while ($val1 > $divisor){

if(($val1%$divisor)==0){

echo "este n�mero n�o � primo <br>";
$verdade = 1;
$divisor = $val1;
}
$divisor++;

}

if(($verdade = 0)){

echo "ele � primo";
}
?>