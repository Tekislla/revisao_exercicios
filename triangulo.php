<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/03/17
 * Time: 10:39
 */

$a = 3;
$b = 1.5;
$c = 2;

if($a + $b > $c AND $b + $c > $a AND $a + $c > $b){

    if ($a == $b AND $b == $c){
        echo "O triangulo eh equilatero!";

    } elseif ($a == $b AND $a != $c OR $b == $c AND $b != $a OR $a == $c AND $a != $b){
        echo "O triangulo eh isoceles!";

    } elseif ($a != $b AND $b != $c AND $a != $c){
        echo "O triangulo eh escaleno";

    } else {
        echo "deu ruim";

    }
}
else {
    echo "nao eh um triangulo";
}