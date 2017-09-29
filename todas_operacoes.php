<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 10/03/17
 * Time: 10:43
 */

    for ($i = 0; $i < 10; $i++){
        echo "Digite um numero: ";
        $vetor1[$i] = fgets(STDIN);

        echo "Digite a operacao ( /, *, -, +): ";
        $oper[$i] = trim(fgets(STDIN));

        echo "Digite outro numero: ";
        $vetor2[$i] = fgets(STDIN);

        switch ($oper[$i]){
            case "/":
                $resul[$i] = $vetor1[$i] / $vetor2[$i];
            break;

            case "*":
                $resul[$i] = $vetor1[$i] * $vetor2[$i];
            break;

            case "-":
                $resul[$i] = $vetor1[$i] - $vetor2[$i];
            break;

            case "+":
                $resul[$i] = $vetor1[$i] + $vetor2[$i];
            break;

            default;
                echo "operador invalido! \n";
            break;
        }

    }

    for ($i = 0; $i < count($resul); $i++){
        echo "\n |$resul[$i]|";
    }
