<?php
    // Criar 2 arrays e verificar os numeros em comum;
    $array_0 = array(0,1,3,4,6,8,'Ezequiel');
    $array_1 = array(10,90,23,8,6,'Ezequiel','Joao'); //numero em comum [6,8];
    
    // Rodar dois loopings e verificar se existe em um e no outro; 
    $em_comum = [];
    for($i = 0; $i < count($array_0); $i++){
        for($n = 0; $n < count($array_1); $n++){
            if($array_0[$i] === $array_1[$n]){ // 3 iguais pra sinalizar que sao identicos, para nao haver conflito em caso de strin e numero no mesmo array;
                //Número em comum;
                $em_comum[] = $array_0[$i];
            }
        }
    }

    foreach($em_comum as $key => $value){
        echo $value;
        echo '<br>';
    }
?>