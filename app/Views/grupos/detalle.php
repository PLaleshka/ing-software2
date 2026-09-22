<?= $this->extend('layouts/principal') ?>

<?= $this->section('titulo') ?>Detalle<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

    <div class="tarjeta">
        <h1><?= esc($grupo['nombre']) ?></h1>
        <p><strong>ID:</strong> <?= esc($grupo['id']) ?></p>
        <p><strong>Materia:</strong> <?= esc($grupo['materia']) ?></p>
    </div>

    <a class="volver" href="<?= route_to('grupos') ?>">← Volver a la lista</a>

<?= $this->endSection() ?>