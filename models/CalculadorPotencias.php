<?php
namespace App\Models;

class CalculadorPotencias {
    public function generarPotencias(int $base): array {
        $potencias = [];
        for ($i = 1; $i <= 15; $i++) {
            $potencias[$i] = pow($base, $i);
        }
        return $potencias;
    }
}