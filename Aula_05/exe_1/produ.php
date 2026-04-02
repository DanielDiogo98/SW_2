 <?php

 $produto = [
    "nome"=> celular,
    "preço"=>1.5000,
    "quantidade"=>20
        ];
 $json_ass = json_decode($json_str);
 file_put_contents("produtos.json", $json_ass);
?>