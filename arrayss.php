<?php

$entrada1=$_POST["entrada1"];
$entrada2=$_POST["entrada2"];
$entrada3=$_POST["entrada3"];
$entrada4=$_POST["entrada4"];
$entrada5=$_POST["entrada5"];
$selector=$_POST["operador"];


$input_array = array($entrada1,$entrada2,$entrada3,$entrada4,$entrada5);



function quitaprimerelemento($entrada1){
    $res=strrev($text1);
echo " quitarprimera:" . $res . "<br>";
}



function quitarultimoelemento($entrada1){
    $res=strrev($text1);
echo "quitarultimo: " . $res . "<br>";




function Ordenaarrays($text1){
    $res=preg_replace($text1,$texto2,$text3);
echo "ordenar" . $res . "<br>";
}




function dividearray($entrada1){
    $res=array_chunk($input_array, 2);
    print_r($res);

    
}

switch ($operador) {
    case 'quitaprimerelemento':
        quitaprimerelemento($entrada1);
    break;

    case 'quitarultimoelemento':
        quitarultimoelemento($entrada1);
     break;
  
    case 'Ordenaarrays':
        Ordenaarrays($entrada1);
         break;
  
    case 'dividearray':
        dividearray($entrada1,$entrada2);
    break;


    default:
        echo "error";
        break;
}



























?>
