<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 07/04/17
 * Time: 10:45
 */

$chute = 0;
    }
}
while ($chute != 42) {
    echo "digite um número: ";
    $chute = (int) fgets(STDIN);

    if ($chute == 42) {
        echo "você venceu\n";

    } else {
        if ($chute > 42) {
            print("alto\n");
        }else{
            print("baixo\n");
        }

print("fim do jogo");
