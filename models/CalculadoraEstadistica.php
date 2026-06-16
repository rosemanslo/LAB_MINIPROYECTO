<?php
namespace App\Models;

class CalculadoraEstadistica {
    public function calcular(array $notas): array {
        if (empty($notas)) return [];

        $notasLimpias = [];
        foreach ($notas as $nota) {
            $val = filter_var($nota, FILTER_VALIDATE_FLOAT);
            $notasLimpias[] = $val !== false ? $val : 0.0;
        }

        $totalNotas = count($notasLimpias);
        $suma = array_sum($notasLimpias);
        $promedio = $suma / $totalNotas;
        $min = min($notasLimpias);
        $max = max($notasLimpias);

        $sumaVariancia = 0;
        foreach ($notasLimpias as $nota) {
            $sumaVariancia += pow(($nota - $promedio), 2);
        }
        $desviacionEstandar = sqrt($sumaVariancia / $totalNotas);

        return [
            'promedio' => $promedio,
            'minima' => $min,
            'maxima' => $max,
            'desviacion' => $desviacionEstandar
        ];
    }
}