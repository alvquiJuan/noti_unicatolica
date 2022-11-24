<h2><?= esc($titulo) ?></h2>

<?php if (! empty($noticias) && is_array($noticias)): ?>

    <?php foreach ($noticias as $articulo): ?>

        <h3><?= esc($articulo['titulo']) ?></h3>

        <div class="main">
            <?= esc($articulo['cuerpo']) ?>
        </div>
        <p><a href="/noticia/<?= esc($articulo['ruta'], 'url') ?>">Ver más</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No hay nada</h3>

    <p>Lamentablemente no hemos podido encontrar noticias para tí.</p>

<?php endif ?>