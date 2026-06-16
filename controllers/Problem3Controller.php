<?php
namespace App\Controllers;

use App\Models\Problema3;

class Problem3Controller
{
    public function ejecutar()
    {
        $lista = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
            $n = (int)$_POST['cantidad'];
            $lista = Problema3::generar($n);
        }

        return $lista;
    }
}