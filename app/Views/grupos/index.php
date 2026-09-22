<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos de trabajo</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
            padding: 40px 20px;
        }
        h1 {
            text-align: center;
            color: #1a73e8;
            margin-bottom: 30px;
        }
        .tarjeta {
            background: #fff;
            max-width: 400px;
            margin: 0 auto 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .tarjeta h2 { font-size: 18px; margin-bottom: 8px; }
        .tarjeta p { color: #777; font-size: 14px; }
    </style>
</head>
<body>

    <h1>Grupos de trabajo académicos</h1>

    <?php foreach ($grupos as $grupo): ?>

        <div class="tarjeta">
            <h2><?= esc($grupo['nombre']) ?></h2>
            <p>ID: <?= esc($grupo['id']) ?></p>
        </div>

    <?php endforeach; ?>

</body>
</html>