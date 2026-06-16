<?php
namespace App\Controllers;

use App\Models\Problema4;

class Problem4Controller
{
    public function ejecutar()
    {
        return Problema4::calcular();
    }
}