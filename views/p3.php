<div class="resultado" id="problema3" style="background-color: #ffffff; border: 2px solid #3d2516; margin-bottom: 30px;">
    <h2>Problema #3: Generador de Múltiplos de 4</h2>
    <p style="text-align: center; font-size: 14px; margin-top: -5px;">Genera una secuencia controlada de múltiplos en base al límite ingresado.</p>
    
    <form method="post" action="index.php#problema3">
        <input type="number" name="cantidad" min="1" placeholder="Cantidad de múltiplos a generar (Ej: 10)" value="<?= $_POST['cantidad'] ?? '' ?>" required>
        <br>
        <button type="submit" name="run_p3">Generar Secuencia</button>
    </form>

    <?php if(!empty($res_comp3)): ?>
        <h3 style="margin-top: 20px;">Secuencia Generada:</h3>
        <div style="background-color: #fff5f6; padding: 15px; border-radius: 8px; border: 1px solid #ffb6c1; max-height: 150px; overflow-y: auto;">
            <p style="font-family: 'Courier New', Courier, monospace; word-wrap: break-word; color: #3d2516; font-size: 15px; font-weight: bold; margin: 0;">
                <?= implode(" ➔ ", $res_comp3); ?>
            </p>
        </div>
    <?php endif; ?>
</div>