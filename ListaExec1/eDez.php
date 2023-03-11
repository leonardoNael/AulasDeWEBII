<?php
    $num = $_POST['txtNum'];

    $res = $num % 2;

    if($num == 0){
        echo "0 é um número neutro.";
    } else if($res == 0){
        echo $num . " é um número par.";
    } else{
        echo $num . " é um número ímpar.";
    }
    echo "<br /><br /> <a href='eDez.html'>Voltar</a>";
?>