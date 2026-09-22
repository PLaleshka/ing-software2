<?= $this->extend('layouts/principal') ?>

<?= $this->section('titulo') ?>Inicio<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

    <h1>Grupos de trabajo académicos</h1>

    <?php foreach ($grupos as $grupo): ?>

        <div class="tarjeta">
            <h2><?= esc($grupo['nombre']) ?></h2>
            <p><?= esc($grupo['materia']) ?></p>
            <a href="<?= route_to('grupos.detalle', $grupo['id']) ?>">Ver detalle</a>
        </div>

    <?php endforeach; ?>

<?= $this->endSection() ?>