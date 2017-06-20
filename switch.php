<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 07/03/17
 * Time: 11:22
 */

echo "Informe o codigo de origem: ";
$cod = fgets(STDIN);

switch ($cod){
    case 1:
        echo "A procedencia do produto é sul";
    break;

    case 2:
        echo "A procedencia do produto é norte";
    break;

    case 3:
        echo "A procedencia do produto é nordeste";
    break;

    case 4:
    case 5:
    case 6:
        echo "A procedencia do produto é sudeste";
    break;

    case 7:
    case 8:
    case 9:
        echo "A procedencia do produto é centro-oeste";
    break;

    default;
        echo "A procedencia do produto é importado";
    break;
}