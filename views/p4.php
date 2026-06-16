<div class="resultado" id="problema4" style="background-color: #ffffff; border: 2px solid #3d2516; margin-bottom: 30px;">
    <h2>Problema #4: Sumatorias de Pares e Impares (1 al 200)</h2>
    <p style="text-align: center; font-size: 14px; margin-top: -5px;">Clasificación y sumas paralelas en un rango lineal numérico estricto.</p>
    
    <div style="display: flex; gap: 15px; margin-top: 15px;">
        <div style="flex: 1; background-color: #fff5f6; padding: 15px; border-radius: 8px; border: 1px solid #ffb6c1; border-left: 5px solid #ff69b4; text-align: center;">
            <span style="font-size: 14px; display: block; color: #3d2516; font-weight: 500;">Suma Números Pares</span>
            <span style="font-size: 22px; font-weight: bold; color: #3d2516;"><?= $res_comp4['pares'] ?></span>
        </div>
        <div style="flex: 1; background-color: #ffffff; padding: 15px; border-radius: 8px; border: 1px solid #3d2516; border-left: 5px solid #3d2516; text-align: center;">
            <span style="font-size: 14px; display: block; color: #3d2516; font-weight: 500;">Suma Números Impares</span>
            <span style="font-size: 22px; font-weight: bold; color: #3d2516;"><?= $res_comp4['impares'] ?></span>
        </div>
    </div>
</div>