<?php
    $numRand = rand(1, 50);
    $numPlay = $_POST['txtNum'];

    if($numPlay == $numRand){
        echo "Você acertou, que cagada.";
    } else{
        echo "Você errou, você escolheu: " . $numPlay . "<br />O número sorteado foi: " . $numRand;
    }
    echo "<br /><br /> <a href='eOito.html'>Voltar</a>";
?>