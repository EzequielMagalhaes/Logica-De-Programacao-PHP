<?php
    /*$helloWorld = "Hello World";
    $olaMundo = "Olá mundo";

    echo $helloWorld;
    echo '<br>';
    echo $olaMundo;
    */

    $helloWorld = ['H','-','e','-','l','-','l','-','o'];
    $string = '';
    for($i = 0; $i < count($helloWorld); $i++){
        if($helloWorld[$i] == '-'){ //faz parar de ler os '-' entre as letras;
            continue;
        }
        $string.=$helloWorld[$i];
    }
    
    echo $string;

?>