<?php
namespace App\Controllers;

use App\Models\CalculadorPotencias;

class ControllerP9 {
    public function ejecutar(): ?array {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_p9']) && !empty($_POST['numero'])) {
            $obj = new CalculadorPotencias();
            $baseSana = (int)$_POST['numero'];
            return $obj->generarPotencias($baseSana);
        }
        return null;
    }
}