<div class="resultado" id="problema6" style="background-color: #ffffff; border: 1px solid #f8c8dc; margin-bottom: 25px;">
    <h2>Problema #6: Presupuesto Hospitalario</h2>
    <form method="POST" action="index.php#problema6">
        <input type="number" name="presupuesto" placeholder="Monto Total ($)" value="<?= $_POST['presupuesto'] ?? '500000' ?>">
        <br>
        <button type="submit" name="run_p6">Calcular Distribución</button>
    </form>
    <?php if ($res_p6): ?>
        <h3>Gráfica del Presupuesto Asignado (Oficial UTP):</h3>
        <div class="chart-container">
            <div class="chart-row">
                <span class="chart-label">Ginecología (40%):</span>
                <div class="bar-wrapper"><div class="bar" style="width: 40%;">$<?= number_format($res_p6['Ginecología'], 2) ?></div></div>
            </div>
            <div class="chart-row">
                <span class="chart-label">Traumatología (35%):</span>
                <div class="bar-wrapper"><div class="bar" style="width: 35%;">$<?= number_format($res_p6['Traumatología'], 2) ?></div></div>
            </div>
            <div class="chart-row">
                <span class="chart-label">Pediatría (25%):</span>
                <div class="bar-wrapper"><div class="bar" style="width: 25%;">$<?= number_format($res_p6['Pediatría'], 2) ?></div></div>
            </div>
        </div>
    <?php endif; ?>
</div>