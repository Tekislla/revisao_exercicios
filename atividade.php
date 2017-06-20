<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 25/03/17
 * Time: 08:11
 */

require 'lib_funcoes.php';

$num = [];
$i = 0;


do {
    echo "Digite um número: ";
    $num[$i] = (int) trim(fgets(STDIN));

    echo "\nDeseja digitar outro número? 0 para sair: ";
    $cond = trim(fgets(STDIN));

    $i++;

} while ($cond != 0);

$max = count($num);


function substituiZero($array) {
    $max = count($array);
    for ($i = 0; $i < $max; $i++) {
        if ($array[$i] < 0) {
            $array[$i] = 0;
        }
    }
    return $array;
}
function substituiRepetido($array) {
    $max = count($array);
    for ($i = 0; $i < $max; $i++) {
        for ($j = 0; $j < $max; $j++) {
            if ($array[$i] == $array[$j]) {
                $array[$i] = 0;
                $array[$j] = 0;
            }
        }
    }
    return $array;
}

do {
    echo "Digite 1 para imprimir a soma dos elementos \nDigite 2 para imprimir a média de seus elementos \nDigite 3 para imprimir a média e o somatório \nDigite 4 para substituir os valores negativos por 0 e imprimir a média \nDigite 5 para substituir todos os valores repetidos por 0 e imprimir a média e o somatório \nDigite 0 para sair \n \nEscolha: ";
    $escolha = trim(fgets(STDIN));

    switch ($escolha) {
        case 0:
            echo "Você saiu da aplicação\n\n";
            break;

        case 1:
            $result = somatoria($num);
            echo "O resultado é $result \n\n";
            break;

        case 2:
            $media = media($num);
            echo "A média é $media \n\n";
            break;

        case 3:
            $a = somatoria($num);
            $b = media($num);
            echo "A somatória é $a e a média é $b \n\n";
            break;

        case 4:
            $sub = substituiZero($num);
            $media2 = media($sub);
            echo "A média é $media2 \n\n";
            break;

        case 5:
            $subs = substituiRepetido($num);
            $media3 = media($subs);
            $soma2 = somatoria($subs);
            echo "A somatória é $soma2 e a média é $media3\n\n";
            break;

    }

} while ($escolha != 0);