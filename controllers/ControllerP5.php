<?php
namespace App\Controllers;

use App\Models\ClasificadorEdades;
use App\Models\Utilidades;

class ControllerP5 {
    public function ejecutar(): ?array {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_p5']) && !empty($_POST['edades'])) {
            $obj = new ClasificadorEdades();
            $edadesSanas = Utilidades::limpiar($_POST['edades']);
            return $obj->procesarEdades(explode(',', $edadesSanas));
        }
        return null;
    }
}