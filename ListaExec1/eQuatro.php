<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do 1 ao 20</title>
</head>
<body>
    <?php
        for($i = 1; $i < 21; $i++){
            echo $i . " ";
        }
        echo "<br />";
        //sem querer usei o 1 do primero laço pra representar o 1 do segundo laço, só pra ficar legal visualmente
        //se fosse pra fazer o segundo laço certo era só "for($in = 1; $in < 21; $in++)"
        for($in = 2; $in < 21; $in++){
            echo $in . "<br />";
        }
    ?>
    <br />
    <a href="index.html">Voltar ao Menu</a>
</body>
</html>