<?php
$val1 = $_POST ["val1"];
$val2 = $_POST ["val2"];
$val3 = $_POST ["val3"];

//maior
if (($val1>$val2) && ($val1 >$val3)){
echo "</br>o maior valor � : " . $val1;

}
if (($val2>$val1) && ($val2 >$val3)){
echo "</br>o maior valor � : " . $val2;

}
if (($val3>$val1) && ($val3 >$val2)){
echo "</br>o maior valor � : " . $val3;

}



//menor
if (!($val1>$val2) && !($val1 >$val3)){
 echo "</br>o menor valor � : " . $val1;

}
if (!($val2>$val1) &&!($val2 >$val3)){
echo "</br>o menor valor � : " . $val2;

}
if (!($val3>$val1) && !($val3 >$val2)){
echo "</br>o menor valor � : " . $val3;

}




?>