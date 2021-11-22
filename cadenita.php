<?php
    $text1=$_POST["texto1"];
    $text2=$_POST["texto2"];
    $text3=$_POST["texto3"];
    $selector=$_POST["operador"];
    

    function convierteM($text1){
        $res=strrev($text1);
    echo "El texto invertido " . $res . "<br>";
    }



    function desorden($text1){
        $res=strrev($text1);
    echo "El texto invertido " . $res . "<br>";




    function convierteA($text1){
        $res=preg_replace($text1,$texto2,$text3);
    echo "El texto convertido en A " . $res . "<br>";
    }



    
    function cuentaletras($text1){
        $res=strlen($text1);
        echo "El numero de letras es ".$res."<br>";
    }



    function reemplazar($text1,$text2,$text3){
        $res=str_replace($text1,$text2,$text3);
        Echo "El texto remplazado es ".$res."<br>";
    }
    

    switch ($operador) {
    
        case 'convierteM':
        convierteM($text1);
        break;

       
        case 'Desorden':
        desorden($text1);
        break;

        case 'ConvierteA':
        convierteA($text1,$text2,$text3);
        break;

        case 'cuentaletras':
            cuentaL($text1);
            break;
    
        
        case 'reemplazar':
                reemplazar($text1,$text2,$text3);
                break;
        


        default:
        echo "te equivocaste error";
        break;
}
    ?>