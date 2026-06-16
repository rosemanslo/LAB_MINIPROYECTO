<?php
namespace App\Models;

class Problema1
{
    public static function calcular($numeros)
    {
        $cantidad = count($numeros);
        $media = array_sum($numeros) / $cantidad;
        $suma = 0;

        foreach ($numeros as $numero) {
            $suma += pow($numero - $media, 2);
        }

        $desviacion = sqrt($suma / $cantidad);

        return [
            'media' => $media,
            'desviacion' => $desviacion,
            'minimo' => min($numeros),
            'maximo' => max($numeros)
        ];
    }
}