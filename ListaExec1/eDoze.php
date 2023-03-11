<?php
    $n1 = $_POST['txtL1'];
    $n2 = $_POST['txtL2'];
    $n3 = $_POST['txtL3'];

    if($n1 + $n2 < $n3 && $n2 + $n3 < $n1 && $n1 + $n3 < $n2){
        echo "Não é um triângulo";
    } else if($n1 == $n2 && $n2 == $n3){
        echo "É um triângulo equilátero, exemplo: <br /><img src='img/equilatero.jpg' width='200' />";
    } else if($n1 == $n2 || $n2 == $n3 || $n1 == $n3){
        echo "É um triângulo isósceles, exemplo: <br /><img src='img/isosceles.jpg' width='200' />";
    } else{
        echo "É um triângulo escaleno, exemplo: <br /><img src='img/escaleno.jpg' width='200' />";
    }

    echo "<br /><br /> <a href='eDoze.html'>Voltar</a>";
?>