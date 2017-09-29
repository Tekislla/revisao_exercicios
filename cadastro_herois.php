<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 14/03/17
 * Time: 10:48
 */
    $superHerois = [];
    //echo "Você deseja inserir quantos super-herois? ";
    //$n = trim(fgets(STDIN));

    do {
        echo   "digite o nome de um super heroi: ";
        $superHerois[] = fgets(STDIN);

        echo "Deseja continuar? (S, N): ";
        $condicao = trim(fgets(STDIN));

        echo "\n";
    } while ($condicao != "N");

    $j = 1;
    foreach ($superHerois as $super){
        echo "{$j}º Super-Heroi: $super";
        $j++;
    }
