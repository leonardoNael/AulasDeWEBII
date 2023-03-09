<?php
    $n1 = $_POST['txtN1'];
    $n2 = $_POST['txtN2'];

    if($n1 > $n2){
        while($n1 >= $n2){
            echo $n2 . " ";
            $n2++;
        }
        echo "<br /><br /><a href='eSeis.html'>Voltar</a>";
    }
    else{
        while($n2 >= $n1){
            echo $n1 . " ";
            $n1++;
        }
        echo "<br /><br /><a href='eSeis.html'>Voltar</a>";
    }
?>