<?php
$Salario = $_POST ["salario"] ;
$Calculo = $_POST["calculo"];


if (($Calculo)== "Reajuste") {
$aumento = ($Salario/100)*38;
echo "Seu Reajuste � de : R$" . $aumento ;
}
if (($Calculo)== "Gratifica�ao") {
$aumento = ($Salario/100)*20;
echo "Sua Gratifica�ao � de : R$" . $aumento ;
}
if (($Calculo)== "Desconto") {
$aumento = ($Salario/100)*15 ;
echo "Seu Salario sera descontado em  : R$" . $aumento ;

}





?>