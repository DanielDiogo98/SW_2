<?php

    // $usuarios = file_get_contents("usuarios.json");
    // $json = json_decode($usuarios);

    // $jsoncut = $json->usuarios;


    // foreach ($jsoncut as $e){
    //     echo "nome: $e->nome - email: $e->email". "<br>";
    // }


    $usuarios = file_get_contents("usuarios.json");
    $json = json_decode($usuarios, true);


    $usuario = $json["usuarios"];

    foreach ($usuario as $novo) {
        foreach ($novo as $key => $value) {
            if ($key == "id") {
                
            }elseif ($key == "nome"){
            echo  " nome: $value" ."<br>";
        }elseif ($key == "email"){
            echo " Email: $value"  ."<br>";
        }
    }
}


?>