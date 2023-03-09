<?php
    //Exercício 1
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];

    if($idade >= 18){
        echo $nome . " é maior de 18 e tem " . $idade . " anos<br/ ><br/ ><a href='eUm.html'>Voltar</a>";
    }
    else{
        echo $nome . " não é maior de 18 e tem " . $idade . " anos<br/ ><br/ ><a href='eUm.html'>Voltar</a>";
    }   
?>