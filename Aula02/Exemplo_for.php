<?php
    for($a = 01; $a <= 10; $a++){
        echo "$a" , "<br>";
    }

    



    $nomes = ['Fulano', 'Ciclano','Beltrano'];

    echo "<hr>";
    $qtde = count($nomes);
    echo $qtde;
    echo "<hr>";

        foreach ($nomes as $nome){
        echo"$nome ", "<br>";}

        for($a = 0; $a <= $qtde - 1; $a++){
            echo " $nomes[$a];" , "<br>";
        }
        foreach ($nomes as $key => $value) {
            echo "$key ", "==> ";
            echo "$value";
            echo"<br>";
        }

?> 