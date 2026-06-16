<?php
namespace App\Models;

class Utilidades
{
    public static function validarNumero($valor)
    {
        return filter_var($valor, FILTER_VALIDATE_FLOAT) !== false;
    }

    public static function limpiar($dato)
    {
        return htmlspecialchars(trim($dato), ENT_QUOTES, 'UTF-8');
    }
}