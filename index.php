<?php
// Forzar la hora legal de Panamá para todo el proyecto
date_default_timezone_set('America/Panama');

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\ControllerP5;
use App\Controllers\ControllerP6;
use App\Controllers\ControllerP7;
use App\Controllers\ControllerP8;
use App\Controllers\ControllerP9;
use App\Controllers\Problem1Controller;
use App\Controllers\Problem2Controller;
use App\Controllers\Problem3Controller;
use App\Controllers\Problem4Controller;

// Ejecución limpia y en el mismo hilo de todos los controladores
$cp1 = new Problem1Controller(); $res_comp1 = $cp1->ejecutar();
$cp2 = new Problem2Controller(); $res_comp2 = $cp2->ejecutar();
$cp3 = new Problem3Controller(); $res_comp3 = $cp3->ejecutar();
$cp4 = new Problem4Controller(); $res_comp4 = $cp4->ejecutar();

$c5 = new ControllerP5(); $res_p5 = $c5->ejecutar();
$c6 = new ControllerP6(); $res_p6 = $c6->ejecutar();
$c7 = new ControllerP7(); $res_p7 = $c7->ejecutar();
$c8 = new ControllerP8(); $res_p8 = $c8->ejecutar();
$c9 = new ControllerP9(); $res_p9 = $c9->ejecutar();

require_once __DIR__ . '/views/header.php';
?>

<h1>Laboratorio #2 - Panel de Control Integrado</h1>


<?php
require_once __DIR__ . '/views/p1.php';
require_once __DIR__ . '/views/p2.php';
require_once __DIR__ . '/views/p3.php';
require_once __DIR__ . '/views/p4.php';
require_once __DIR__ . '/views/p5.php';
require_once __DIR__ . '/views/p6.php';
require_once __DIR__ . '/views/p7.php';
require_once __DIR__ . '/views/p8.php';
require_once __DIR__ . '/views/p9.php';

require_once __DIR__ . '/views/footer.php';
?>