<div class="resultado" id="problema8" style="background-color: #ffffff; border: 1px solid #f8c8dc; margin-bottom: 25px;">
    <h2>Problema #8: Estación del Año</h2>
    <form method="POST" action="index.php#problema8">
        <input type="date" name="fecha" value="<?= $_POST['fecha'] ?? date('Y-m-d') ?>">
        <br>
        <button type="submit" name="run_p8">Ver Estación</button>
    </form>
    <?php if ($res_p8): ?>
        <p style="margin-top: 15px; font-size: 16px;">La estación correspondiente a la fecha es: <strong><?= $res_p8 ?></strong></p>
    <?php endif; ?>
</div>