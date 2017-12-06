<?php
$val1 = $_POST ["val1"];
$val2 = $_POST ["val2"];
$val3 = $_POST ["val3"];

//maior
if (($val1>$val2) && ($val1 >$val3)){
echo "</br>o maior valor é : " . $val1;

}
if (($val2>$val1) && ($val2 >$val3)){
echo "</br>o maior valor é : " . $val2;

}
if (($val3>$val1) && ($val3 >$val2)){
echo "</br>o maior valor é : " . $val3;

}



//menor
if (!($val1>$val2) && !($val1 >$val3)){
 echo "</br>o menor valor é : " . $val1;

}
if (!($val2>$val1) &&!($val2 >$val3)){
echo "</br>o menor valor é : " . $val2;

}
if (!($val3>$val1) && !($val3 >$val2)){
echo "</br>o menor valor é : " . $val3;

}




?>