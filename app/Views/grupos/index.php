<?= $this->extend('layouts/principal') ?>

<?= $this->section('titulo') ?>Inicio<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

    <h1>Explora los grupos disponibles</h1>

    <?php foreach ($grupos as $grupo): ?>

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
                <a href="<?= route_to('grupos.detalle', $grupo['id']) ?>" class="btn detalle">Ver grupo</a>
                <?php if ($lleno): ?>
                    <button class="btn solicitar" disabled>Grupo lleno</button>
                <?php else: ?>
                    <button class="btn solicitar">Solicitar unirse</button>
                <?php endif; ?>
            </div>
        </div>

    <?php endforeach; ?>

<?= $this->endSection() ?>