<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 17/03/17
 * Time: 10:38
 */
$i = 0;

 do {
     //echo "Digite um numero: ";
     $vetor[$i] = random_int(-10, 10);

     for($j = 0; $j <= $i; $j++){
         if($vetor[$i] < $vetor[$j]){
             $aux1 = $vetor[$i];
             for ($k = $j; $k <= $i; $k++){
                 $aux2      = $vetor[$k];
                 $vetor[$k] = $vetor[$j];
                 $vetor[$j] = $aux2;
             }
         }
     }

    // echo "\n";
    // echo "Deseja digitar outro numero? (Se nâo digite N) ";
    // $condicao = trim(fgets(STDIN));

     $i++;

 } while($i != 10);

 print_r($vetor);
