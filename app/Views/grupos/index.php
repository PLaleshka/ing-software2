<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos de trabajo</title>
</head>
<body>

    <h1>Grupos de trabajo académicos</h1>

    <?php foreach ($grupos as $grupo): ?>

        <div>
            <h2><?= esc($grupo['nombre']) ?></h2>
            <p>ID: <?= esc($grupo['id']) ?></p>
        </div>

    <?php endforeach; ?>

</body>
</html>