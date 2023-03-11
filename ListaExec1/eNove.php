<?php
    $num = $_POST['txtNum'];

    if($num == 0){
        echo "Igual a zero";
    } else if($num > 0){
        echo "Valor positivo";
    } else{
        echo "Valor negativo";
    }
    echo "<br /><br /> <a href='eNove.html'>Voltar</a>";
?>