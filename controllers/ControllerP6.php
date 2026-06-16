<?php
namespace App\Controllers;

use App\Models\CalculadorPresupuesto;
use App\Models\Utilidades;

class ControllerP6 {
    public function ejecutar(): ?array {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_p6']) && !empty($_POST['presupuesto'])) {
            $obj = new CalculadorPresupuesto();
            $montoSano = Utilidades::validarNumero($_POST['presupuesto']) ? (float)$_POST['presupuesto'] : 0.0;
            return $obj->distribuir($montoSano);
        }
        return null;
    }
}