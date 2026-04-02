<?php
    $json = file_get_contents("../exe_1/produtos.json");

    
    $produtos = json_decode($json, true);



    $produtos['nome2'] = ["Fone"];
    $produtos['preço2'] = ["preço2" => 200];
    $produtos['quantidade'] = ["Quantidade" => 30];
    echo "<pre>";
    var_dump( $produtos);
    echo "</pre>";

    $prod = json_encode($produtos);

    file_put_contents("../exe_1/produtos.json", $prod)


    
    
?>