<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operador=$_POST["operador"];

$num1=[0,2048];
$num2= rand(0,2048);

echo "El numero es: ".$num2 ."<br>";



function decimalabinario($num1,){
    
    $res=decicbin($num1);
    echo "$res"."<br>";
}
  

function decimalaoctal($num1){
    
    $res=decoct($num1);
    echo "$res"."<br>";
}
      
   


function decimalahexadecimal($num1){
    
    $res=dechex($num1);
    echo "$res"."<br>";
}
  

function binarioadecimal($num1){
    
    $res=bindec($num1);
    echo "$res"."<br>";
}


function octaladecimal($num1){
    
    $res=octdec($num1);
    echo "$res"."<br>";
}
  

function hexadecimaladecimal($num1){
    
    $res=hexdec($num1);
    echo "$res"."<br>";
}



switch ($operador) {

    case 'decimalabinario':
        decimalabinario($num1);
    break;


        case 'decimalaoctal':
            decimalaoctal($num1);
            break;
            case 'decimalahexadecimal':
                decimalahexadecimal($num1);
             break;
            case ' binarioadecimal':
                binarioadecimal($num1);
            break;
            case 'octaladecimal':
                octaladecimal($num1);
            break;
        
            case 'hexadecimaladecimal':
                hexadecimaladecimal($num1);
            break;
    
            default:
                echo "error";
                break;      
                
}

















?>