<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 17/03/17
 * Time: 11:37
 */
$i = 0;

do {
    $vetor[$i] = random_int(-10, 10);

    //echo "\n";
    //echo "Deseja digitar outro numero? (Se nâo digite N) ";
    //$condicao = trim(fgets(STDIN));

    $i++;

} while($i != 10);

for($j = 1; $j < $i;$j++){
    for ($k = 0; $k <= $j; $k++){
        if ($vetor[$j] < $vetor[$k]){
            $aux = $vetor[$j];
            $vetor[$j] = $vetor[$k];
            $vetor[$k] = $aux;
        }
    }
}

print_r($vetor);
