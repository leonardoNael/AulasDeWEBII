<?php
    $nota = $_POST['txtNota'];
    if($nota < 0 || $nota > 10){
        echo "Nota inválida! Digite uma nota entre 0 e 10.<br/ ><br/ ><a href='eTres.html'>Voltar</a>";
    }
    else {
        echo "Nota registrada com sucesso!<br/ ><br/ ><a href='eTres.html'>Voltar</a>";
    }
?>