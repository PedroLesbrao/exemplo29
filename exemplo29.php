<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "ESTRUTURA CONDICIONAL - SWITCH-CASE<br><br>";
        /*As documentações dizem que quando temos mais de 5
        ifs encadeados devemos utilizar o switch-case,
        mas,não há obrigação */

        $iNum1=10; $iNum2=5;
        $sOP= "+";

        switch($sOP){
            case "+";{
                echo "Soma = ".($iNum1+$iNum2);
                break;
            }
            case "-";{
                echo "Subtração = ".($iNum1-$iNum2);
                break;
            }
            case "*";{
                echo "Multiplicação = ".($iNum1*$iNum2);
                break;
            }
            case "/";{
                echo "Divisão = ".($iNum1/$iNum2);
                break;
            }
            default:{
                echo "Opção INVÁLIDA!!!";
            }
        }
    ?>
    </div>
</body>
</html>