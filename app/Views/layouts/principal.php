<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?> · UTA</title>
    <style>
        :root {
            --uta: #0054a6;
            --uta-dark: #00377a;
            --acento: #ffd400;
            --texto: #263238;
            --gris: #78909c;
            --fondo: #f1f4f6;
            --tarjeta: #ffffff;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--fondo);
            color: var(--texto);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background: linear-gradient(90deg, var(--uta), var(--uta-dark));
            color: #fff;
            padding: 14px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 60, 40, 0.25);
        }
        .identidad { display: flex; align-items: center; gap: 12px; }
        .siglas {
            background: var(--acento);
            color: var(--uta-dark);
            font-weight: 700;
            font-size: 14px;
            width: 42px;
            height: 42px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            letter-spacing: 0.5px;
        }
        .identidad strong { font-size: 18px; display: block; }
        .identidad small { opacity: 0.85; font-size: 12px; }
        .usuario { display: flex; align-items: center; gap: 10px; }
        .avatar {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.4);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 13px;
            font-weight: 600;
        }
        .usuario small { display: block; opacity: 0.85; font-size: 11px; }
        .usuario span { font-size: 14px; font-weight: 600; }
        main {
            flex: 1;
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 32px 20px;
        }
        h1 { font-size: 24px; margin-bottom: 24px; }
        .tarjeta {
            background: var(--tarjeta);
            border-radius: 14px;
            padding: 22px;
            margin-bottom: 18px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
            border: 1px solid #e3e8eb;
        }
        .cabeza { display: flex; justify-content: space-between; align-items: flex-start; gap: 12px; }
        .cabeza h2 { font-size: 18px; }
        .materia { color: var(--gris); font-size: 13px; margin-top: 2px; }
        .estado {
            font-size: 12px;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 999px;
            white-space: nowrap;
        }
        .estado.cupos { background: #e6f0fb; color: var(--uta); }
        .estado.lleno { background: #fdeaea; color: #c62828; }
        .integrantes { list-style: none; margin: 16px 0; }
        .integrantes li {
            padding: 7px 0;
            border-bottom: 1px solid #eef2f4;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .integrantes li::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--uta);
            opacity: 0.5;
        }
        .acciones { display: flex; justify-content: space-between; align-items: center; margin-top: 6px; }
        .btn {
            border: none;
            border-radius: 8px;
            padding: 9px 16px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn.solicitar { background: var(--uta); color: #fff; }
        .btn.solicitar:hover { background: var(--uta-dark); }
        .btn.detalle { background: transparent; color: var(--uta); border: 1px solid var(--uta); }
        .btn.solicitar:disabled { background: #cfd8dc; color: #78909c; cursor: not-allowed; }
        .volver { color: var(--uta); text-decoration: none; font-size: 14px; font-weight: 600; }
        .ficha p { margin: 6px 0; font-size: 15px; }
        footer {
            text-align: center;
            color: var(--gris);
            font-size: 12px;
            padding: 18px;
            border-top: 1px solid #e3e8eb;
            background: #fff;
        }
    </style>
</head>
<body>

    <header>
        <div class="identidad">
            <div class="siglas">UTA</div>
            <div>
                <strong>Universidad de Tarapacá</strong>
                <small>Grupos de trabajo académicos</small>
            </div>
        </div>
        <div class="usuario">
            <div class="avatar">MP</div>
            <div>
                <span>María Pérez</span>
                <small>Estudiante</small>
            </div>
        </div>
    </header>

    <main>
        <?= $this->renderSection('contenido') ?>
    </main>

    <footer>UTA · Universidad de Tarapacá · Proyecto de ejemplo con CodeIgniter 4</footer>

</body>
</html>