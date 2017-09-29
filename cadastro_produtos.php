<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/04/17
 * Time: 11:14
 */

require_once 'lib_funcoes.php';

$produtos = [];

do {
    echo "Digite o preço do produto: ";
    $produtos[] = trim(fgets(STDIN));

    echo "\nDeseja cadastrar outro produto? 1 para sim, 0 para não: ";
    $cond = trim(fgets(STDIN));

} while ($cond != 0);

$media = mediaArray($produtos);
$soma = somatoriaArray($produtos);

echo "A média é $media\n";
echo "A soma é $soma\n";
