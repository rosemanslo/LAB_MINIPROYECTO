<?php
namespace App\Models;

class Problema3
{
    public static function generar($n)
    {
        $multiplos = [];
        for ($i = 1; $i <= $n; $i++) {
            $multiplos[] = 4 * $i;
        }
        return $multiplos;
    }
}