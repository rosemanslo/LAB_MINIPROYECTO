<?php
namespace App\Controllers;

use App\Models\CalculadoraEstadistica;
use App\Models\Utilidades;

class ControllerP7 {
    public function ejecutar(): ?array {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_p7']) && !empty($_POST['notas'])) {
            $obj = new CalculadoraEstadistica();
            $notasSanas = Utilidades::limpiar($_POST['notas']);
            return $obj->calcular(explode(',', $notasSanas));
        }
        return null;
    }
}