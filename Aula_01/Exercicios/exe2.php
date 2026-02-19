<?php 
    $n1 = 8;
    $n2 = 7;
    $n3 = 9;
    $media = ($n1 + $n2 + $n3) /3;
    echo "numero:1 => " .$n1. "<br>";
    echo "numero:2 => " .$n2. "<br>" ;
    echo "numero:3 => " .$n3. "<br>"  ;
    if( $media >= 5){ 
        $resultado = "aprovado";
    }else{
        $resultado = "reprovado";
    }
    echo "A média é: => " .$media. " você foi: ".$resultado ;
?>