<?php
    $n1 = $_POST['txtN1'];
    $n2 = $_POST['txtN2'];

    if($n1 == $n2){
        echo "Os números são iguais";
    } else if($n1 > $n2){
        echo $n1 . " é maior que " . $n2;
    } else{
        echo $n2 . " é maior que " . $n1;
    }
    echo "<br /><br /> <a href='eOnze.html'>Voltar</a>";
?>