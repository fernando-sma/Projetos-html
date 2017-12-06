<?php
$Salario = $_POST ["salario"] ;
$Calculo = $_POST["calculo"];


if (($Calculo)== "Reajuste") {
$aumento = ($Salario/100)*38;
echo "Seu Reajuste é de : R$" . $aumento ;
}
if (($Calculo)== "Gratificaçao") {
$aumento = ($Salario/100)*20;
echo "Sua Gratificaçao é de : R$" . $aumento ;
}
if (($Calculo)== "Desconto") {
$aumento = ($Salario/100)*15 ;
echo "Seu Salario sera descontado em  : R$" . $aumento ;

}





?>