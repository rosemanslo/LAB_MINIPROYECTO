<?php
namespace App\Controllers;

use App\Models\Problema1;
use App\Models\Utilidades;

class Problem1Controller
{
    public function ejecutar()
    {
        $resultado = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['n1'])) {
            $numeros = [
                Utilidades::validarNumero($_POST['n1']) ? (float)$_POST['n1'] : 0,
                Utilidades::validarNumero($_POST['n2']) ? (float)$_POST['n2'] : 0,
                Utilidades::validarNumero($_POST['n3']) ? (float)$_POST['n3'] : 0,
                Utilidades::validarNumero($_POST['n4']) ? (float)$_POST['n4'] : 0,
                Utilidades::validarNumero($_POST['n5']) ? (float)$_POST['n5'] : 0
            ];

            $resultado = Problema1::calcular($numeros);
        }

        return $resultado;
    }
}