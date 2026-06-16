<?php
namespace App\Models;

class CalculadorPresupuesto {
    public function distribuir(float $montoTotal): array {
        return [
            'Ginecología' => $montoTotal * 0.40,
            'Traumatología' => $montoTotal * 0.35,
            'Pediatría' => $montoTotal * 0.25
        ];
    }
}