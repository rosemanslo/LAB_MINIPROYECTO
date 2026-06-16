<?php
namespace App\Controllers;

use App\Models\GestorEstaciones;

class ControllerP8 {
    public function ejecutar(): ?string {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_p8']) && !empty($_POST['fecha'])) {
            $obj = new GestorEstaciones();
            return $obj->obtenerEstacion($_POST['fecha']);
        }
        return null;
    }
}