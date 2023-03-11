<?php
    $pcRound = rand(1, 3);
    $playerRound = $_POST['op'];

    if($playerRound == 'oPedra' && $pcRound == 3){
        echo "Você Ganhou.<br /><br />Você escolheu: Pedra<br /><img src='img/pedra.png' width='200' /><br /><br />A máquina escolheu: Tesoura<br /><img src='img/tesoura.png' width='200' />";
    } else if($playerRound == 'oPapel' && $pcRound == 1){
        echo "Você Ganhou.<br /><br />Você escolheu: Papel<br /><img src='img/papel.png' width='200' /><br /><br />A máquina escolheu: Pedra<br /><img src='img/pedra.png' width='200' />";
    } else if($playerRound == 'oTesoura' && $pcRound == 2){
        echo "Você Ganhou.<br /><br />Você escolheu: Tesoura<br /><img src='img/tesoura.png' width='200' /><br /><br />A máquina escolheu: Papel<br /><img src='img/papel.png' width='200' />";
    } else if($playerRound == 'oPedra' && $pcRound == 2){
        echo "Você Perdeu.<br /><br />Você escolheu: Pedra<br /><img src='img/pedra.png' width='200' /><br /><br />A máquina escolheu: Papel<br /><img src='img/papel.png' width='200' />";
    } else if($playerRound == 'oPapel' && $pcRound == 3){
        echo "Você Perdeu.<br /><br />Você escolheu: Papel<br /><img src='img/papel.png' width='200' /><br /><br />A máquina escolheu: Tesoura<br /><img src='img/tesoura.png' width='200' />";
    } else if($playerRound == 'oTesoura' && $pcRound == 1){
        echo "Você Perdeu.<br /><br />Você escolheu: Tesoura<br /><img src='img/tesoura.png' width='200' /><br /><br />A máquina escolheu: Pedra<br /><img src='img/pedra.png' width='200' />";
    } else if($playerRound == 'oPedra' && $pcRound == 1){
        echo "Empate, ambos escolheram pedra<br /><br/ ><img src='img/pedra.png' width='200' />";
    } else if($playerRound == 'oPapel' && $pcRound == 2){
        echo "Empate, ambos escolheram papel<br /><br /><img src='img/papel.png' width='200' />";
    } else if($playerRound == 'oTesoura' && $pcRound == 3){
        echo "Empate, ambos escolheram tesoura<br /><br /><img src='img/tesoura.png' width='200' />";
    }
    echo "<br /><br /> <a href='eTreze.html'>Voltar</a>";
?>