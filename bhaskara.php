<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 07/03/17
 * Time: 10:38
 */

echo "Informe um valor para 'a': ";
    $a = fgets(STDIN);

echo "Informe um valor para 'b': ";
    $b = fgets(STDIN);

echo "Informe um valor para 'c': ";
    $c = fgets(STDIN);

    $delta = ($b * $b) - (4 * $a * $c);

    if($delta > 0 ){
        $x¹ = (-$b + sqrt($delta))/ 2 * $a;
        $x² = (-$b - sqrt($delta))/ 2 * $a;

        echo "Valor de x¹ = $x¹ e de x² = $x²";
    } elseif ($delta == 0){
        $x = (- $b )/ 2 * $a;

        echo "O delta é igual a 0 com isso temos apenas um valor para x sendo: $x";

    } else {
        echo "delta nao pertence aos reias";
    }


