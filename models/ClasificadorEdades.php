<?php
namespace App\Models;

class ClasificadorEdades {
    public function procesarEdades(array $edades): array {
        $stats = ['niño' => 0, 'adolescente' => 0, 'adulto' => 0, 'mayor' => 0];
        $repetidas = [];

        foreach ($edades as $edad) {
            $edad = filter_var($edad, FILTER_VALIDATE_INT);
            $edad = $edad !== false ? $edad : 0;
            
            if ($edad >= 0 && $edad <= 12) $stats['niño']++;
            elseif ($edad >= 13 && $edad <= 17) $stats['adolescente']++;
            elseif ($edad >= 18 && $edad <= 64) $stats['adulto']++;
            elseif ($edad >= 65) $stats['mayor']++;

            if ($edad > 0) {
                if (!isset($repetidas[$edad])) $repetidas[$edad] = 0;
                $repetidas[$edad]++;
            }
        }
        return ['clasificacion' => $stats, 'repeticiones' => $repetidas];
    }
}