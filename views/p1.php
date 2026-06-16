<div class="resultado" id="problema1" style="background-color: #ffffff; border: 2px solid #3d2516; margin-bottom: 30px;">
    <h2>Problema #1: Estadísticas de Datos Numéricos</h2>
    <p style="text-align: center; font-size: 14px; margin-top: -5px;">Ingresa 5 números para calcular métricas estadísticas descriptivas.</p>
    
    <form method="post" action="index.php#problema1">
        <input type="number" step="any" name="n1" placeholder="Número 1" value="<?= $_POST['n1'] ?? '' ?>" required>
        <input type="number" step="any" name="n2" placeholder="Número 2" value="<?= $_POST['n2'] ?? '' ?>" required>
        <input type="number" step="any" name="n3" placeholder="Número 3" value="<?= $_POST['n3'] ?? '' ?>" required>
        <input type="number" step="any" name="n4" placeholder="Número 4" value="<?= $_POST['n4'] ?? '' ?>" required>
        <input type="number" step="any" name="n5" placeholder="Número 5" value="<?= $_POST['n5'] ?? '' ?>" required>
        <br>
        <button type="submit" name="run_p1">Calcular Métricas</button>
    </form>

    <?php if($res_comp1): ?>
        <h3 style="margin-top: 20px;">Resultados Obtenidos:</h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px; color: #3d2516;">
            <tr style="background-color: #fff0f3;">
                <th style="padding: 10px; border: 1px solid #ffb6c1; text-align: left;">Métrica</th>
                <th style="padding: 10px; border: 1px solid #ffb6c1; text-align: right;">Valor Calculado</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ffb6c1;">Media Aritmética (μ)</td>
                <td style="padding: 10px; border: 1px solid #ffb6c1; text-align: right; font-weight: bold;"><?= number_format($res_comp1['media'], 4) ?></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ffb6c1;">Desviación Estándar (σ)</td>
                <td style="padding: 10px; border: 1px solid #ffb6c1; text-align: right; font-weight: bold;"><?= number_format($res_comp1['desviacion'], 4) ?></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ffb6c1;">Valor Mínimo Registrado</td>
                <td style="padding: 10px; border: 1px solid #ffb6c1; text-align: right; font-weight: bold;"><?= $res_comp1['minimo'] ?></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ffb6c1;">Valor Máximo Registrado</td>
                <td style="padding: 10px; border: 1px solid #ffb6c1; text-align: right; font-weight: bold;"><?= $res_comp1['maximo'] ?></td>
            </tr>
        </table>
    <?php endif; ?>
</div>