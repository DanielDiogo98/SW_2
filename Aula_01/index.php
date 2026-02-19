<?php 
    $nota= 7;
    if($nota >= 6) {
        echo "aprovado!";
    }else {
        echo "reprovado!";
    }

    echo"<br>";
    for ($i = 1; $i <=10; $i++) {
        if ($i %2 == 0) {
            echo "Numero: " . $i . " aprovado"."<br>";
        }else{
            echo "Numero: " . $i . " reprovado"."<br>";
        }
        
    }
?>