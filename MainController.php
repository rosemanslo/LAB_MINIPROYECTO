<?php
namespace App;

use App\ClasificadorEdades;
use App\CalculadorPresupuesto;
use App\CalculadoraEstadistica;
use App\GestorEstaciones;
use App\CalculadorPotencias;

class MainController {
    public function procesarPeticion(): array {
        $resultados = [
            'p5' => null,
            'p6' => null,
            'p7' => null,
            'p8' => null,
            'p9' => null
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['run_p5']) && !empty($_POST['edades'])) {
                $obj = new ClasificadorEdades();
                $resultados['p5'] = $obj->procesarEdades(explode(',', $_POST['edades']));
            }
            if (isset($_POST['run_p6']) && !empty($_POST['presupuesto'])) {
                $obj = new CalculadorPresupuesto();
                $resultados['p6'] = $obj->distribuir((float)$_POST['presupuesto']);
            }
            if (isset($_POST['run_p7']) && !empty($_POST['notas'])) {
                $obj = new CalculadoraEstadistica();
                $resultados['p7'] = $obj->calcular(explode(',', $_POST['notas']));
            }
            if (isset($_POST['run_p8']) && !empty($_POST['fecha'])) {
                $obj = new GestorEstaciones();
                $resultados['p8'] = $obj->obtenerEstacion($_POST['fecha']);
            }
            if (isset($_POST['run_p9']) && !empty($_POST['numero'])) {
                $obj = new CalculadorPotencias();
                $resultados['p9'] = $obj->generarPotencias((int)$_POST['numero']);
            }
        }

        return $resultados;
    }
}