<?php
    // Preencher array sem números repetidos;
    $arr = [];
    for ($i = 0; $i < 5; $i++){
        $arr[$i] = rand(1,5); //gera os numeros aleatórios; quanto maior o seundo numero, menor as chances de cair um numero repetido;
        while(inArrayCustom($i,$arr[$i],$arr)){
            $arr[$i] = rand (1,5);
        }
    }

    print_r($arr);
    function inArrayCustom($indice,$valor,$arr){
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] == $valor && $i != $indice){
                echo 'Repetiu!<br>'; //Toda vez que ele precisar retornar ao loop para nao gerar numeros repetidos, ele vai exibir a mensagem de 'Repetiu!'
                return true;
            }
        }
        return false;
    }
?>