<div class="resultado" id="problema7" style="background-color: #ffffff; border: 1px solid #f8c8dc; margin-bottom: 25px;">
    <h2>Problema #7: Calculadora de Datos Estadísticos</h2>
    <form method="POST" action="index.php#problema7">
        <input type="text" name="notas" placeholder="Ej: 85,90,78,100,92" value="<?= $_POST['notas'] ?? '85,90,78,100,92' ?>">
        <br>
        <button type="submit" name="run_p7">Calcular Estadísticas</button>
    </form>
    <?php if ($res_p7): ?>
        <h3>Resultados Estadísticos:</h3>
        <pre><?php print_r($res_p7); ?></pre>
    <?php endif; ?>
</div>