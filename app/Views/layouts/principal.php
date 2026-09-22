<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?> · Grupos académicos</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
            padding: 40px 20px;
        }
        main { max-width: 600px; margin: 0 auto; }
        h1 { color: #1a73e8; margin-bottom: 30px; }
        h2 { font-size: 18px; margin-bottom: 8px; }
        p { color: #555; font-size: 14px; }
        .tarjeta {
            background: #fff;
            padding: 20px;
            margin-bottom: 16px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .volver { display: inline-block; margin-top: 20px; color: #1a73e8; }
        .error {
            background: #fdecea;
            color: #d93025;
            border-radius: 8px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>
</body>
</html>