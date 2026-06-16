<div class="resultado" id="problema5" style="background-color: #ffffff; border: 1px solid #f8c8dc; margin-bottom: 25px;">
    <h2>Problema #5: Clasificación de Edades y Estadísticas</h2>
    <form method="POST" action="index.php#problema5">
        <input type="text" name="edades" placeholder="Ej: 5,14,25,70,25" value="<?= $_POST['edades'] ?? '5,14,25,70,25' ?>">
        <br>
        <button type="submit" name="run_p5">Procesar Edades</button>
    </form>
    <?php if ($res_p5): ?>
        <h3>Resultados y Gráfica de Distribución:</h3>
        <div class="chart-container">
            <?php foreach ($res_p5['clasificacion'] as $cat => $cant): ?>
                <div class="chart-row">
                    <span class="chart-label"><?= ucfirst($cat) ?>:</span>
                    <div class="bar-wrapper">
                        <div class="bar" style="width: <?= ($cant > 0) ? (($cant / array_sum($res_p5['clasificacion'])) * 100) : 0 ?>%;"><?= $cant ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h4>Edades Repetidas:</h4>
        <pre><?php print_r($res_p5['repeticiones']); ?></pre>
    <?php endif; ?>
</div>