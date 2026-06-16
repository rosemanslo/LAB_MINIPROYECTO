<div class="resultado" id="problema9" style="background-color: #ffffff; border: 1px solid #f8c8dc; margin-bottom: 25px;">
    <h2>Problema #9: Primeras 15 Potencias</h2>
    <form method="POST" action="index.php#problema9">
        <input type="number" name="numero" min="1" max="9" value="<?= $_POST['numero'] ?? '4' ?>">
        <br>
        <button type="submit" name="run_p9">Generar Potencias</button>
    </form>
    <?php if ($res_p9): ?>
        <h3>Cálculo de Potencias (1 al 15):</h3>
        <pre><?php foreach ($res_p9 as $pot => $val) { echo "Potencia $pot: $val\n"; } ?></pre>
    <?php endif; ?>
</div>