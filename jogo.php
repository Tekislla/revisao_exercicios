<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 07/03/17
 * Time: 16:29
 */
do{
    echo "Informe um numero de 0 à 10: ";
    $numCliente = fgets(STDIN);

    if($numCliente == rand(0,10)){
        $cond = "vitoria";
        echo "Voce venceu o jogo!";

        echo "\n";

        echo "voce desejeja jogar novamente? (S, N): ";
        $continuar = fgets(STDIN);

        if($continuar == "S"){
            $cond = "continuar";

        } else {
            $cond = "acabou";

        }
    } else {
        echo "voce perdeu";
        $cond = "acabou";
    }
    echo "\n";



} while ($cond == "acabou");