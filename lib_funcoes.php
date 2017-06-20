<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/04/17
 * Time: 11:26
 */

function somatoriaArray($array) {
    $soma = array_sum($array);
    return $soma;
}
function mediaArray($array) {
    $media = array_sum($array) / count($array);
    return $media;
}