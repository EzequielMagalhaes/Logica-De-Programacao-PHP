<?php
    //1. Verificar se tem mais de 5 letras;
    //2. Se é numero;
    //3. Se possui @;
    // isset = Verificar se existe = Variável ter valor ou ser criada;
    /*if(@$_POST['acao'] != null){ // OUTRO JEITO DE FAZER
        echo 'alo';
    }*/
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];

        if(strlen($nome) >= 5){
            echo 'Nosso nome tem mais ou igual a 5 letras!';
            echo '<br>';
        }

        if(is_numeric($numero)){
            echo 'É numero!';
            echo '<br>';
        }

        if(strstr($email,'@')){
            echo 'Tem email';
            echo '<br>';
            if(strstr($email,'@hotmail')){
                echo 'O email do usuario é hotmail!';
                echo '<br>';
            }
        }
    }
?>

<form action="" method="post">
    <input type="text" name="nome">
    <input type="text" name="numero">
    <input type="text" name="email">
    <input type="submit" name="acao">
</form>