<?= $this->extend('layouts/principal') ?>

<?= $this->section('titulo') ?>Detalle<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

    <?php $lleno = $grupo['cupos'] === 0; ?>

    <div class="tarjeta">
        <div class="cabeza">
            <div>
                <h2><?= esc($grupo['nombre']) ?></h2>
                <p class="materia"><?= esc($grupo['materia']) ?></p>
            </div>
            <?php if ($lleno): ?>
                <span class="estado lleno">Lleno</span>
            <?php else: ?>
                <span class="estado cupos"><?= esc($grupo['cupos']) ?> cupos disponibles</span>
            <?php endif; ?>
        </div>

        <ul class="integrantes">
            <?php foreach ($grupo['integrantes'] as $integrante): ?>
                <li><?= esc($integrante) ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="acciones">
            <a class="volver" href="<?= route_to('grupos') ?>">← Volver a la lista</a>
            <?php if ($lleno): ?>
                <button class="btn solicitar" disabled>Grupo lleno</button>
            <?php else: ?>
                <button class="btn solicitar">Solicitar unirse</button>
            <?php endif; ?>
        </div>
    </div>

<?= $this->endSection() ?>