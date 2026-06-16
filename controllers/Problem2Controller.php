<?php
namespace App\Controllers;

use App\Models\Problema2;

class Problem2Controller
{
    public function ejecutar()
    {
        return Problema2::calcular();
    }
}