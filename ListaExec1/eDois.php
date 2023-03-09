<?php
    $mes = $_POST['txtMes'];

    switch ($mes) {
        case 1:
            echo "Janeiro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 2:
            echo "Fevereiro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 3:
            echo "Março<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 4:
            echo "Abril<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 5:
            echo "Maio<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 6:
            echo "Junho<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 7:
            echo "Julho<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 8:
            echo "Agosto<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 9:
            echo "Setembro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 10:
            echo "Outubro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 11:
            echo "Novembro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        case 12:
            echo "Dezembro<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
        default:
            echo "Opção inválida! Digite um mês válido.<br/ ><br/ ><a href='eDois.html'>Voltar</a>";
            break;
    }
?>