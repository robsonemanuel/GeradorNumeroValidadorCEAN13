<?php

$codigo = "789603267167";

$array = str_split($codigo);
$arrayCasasNumero1 = array();
$arrayCasasNumero2 = array();
for($i=0;$i<count($array);$i++){
  if($i==0 || $i==2 || $i==4 || $i==6 || $i==8 || $i==10){
    $valor = $array[$i] * 1;
    array_push($arrayCasasNumero1,$valor);
  }
  if($i==1 || $i==3 || $i==5 || $i==7 || $i==9 || $i==11){
    $valor = $array[$i] * 3;
    array_push($arrayCasasNumero2,$valor);
  }

}

$somaCasas1 = array_sum($arrayCasasNumero1);
$somaCasas2 = array_sum($arrayCasasNumero2);

$total = $somaCasas1 + $somaCasas2;
$arredondado = (ceil($total/10))*10;


$numeroValidador = $arredondado - $total;

echo $codigo.$numeroValidador;

 ?>
