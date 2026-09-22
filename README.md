# Grupos de trabajo académicos

Aplicación web de ejemplo construida con el framework **CodeIgniter 4** (PHP).
Es un proyecto básico de instalación: muestra una lista de grupos de trabajo
académicos para comprobar que el framework quedó correctamente instalado y
funcionando.

![Estado](https://img.shields.io/badge/CodeIgniter-4.7-red) ![PHP](https://img.shields.io/badge/PHP-%3E%3D8.2-blue)

## ¿Qué hace?

Al visitar `/` o `/grupos` se muestra una página con una lista de grupos de
trabajo. Por ahora **los datos son fijos** (no se conecta a una base de datos),
justo para mantener el ejemplo simple e independiente.

### Flujo de la aplicación

```
petición HTTP  ──►  Router (Routes.php)  ──►  Controlador (Grupos)
                                               │
                                               ▼
                                             Modelo (GrupoModel)  ──►  datos
                                               │
                                               ▼
                                          Vista (Views/grupos)  ──►  HTML
```

1. **Ruta** (`app/Config/Routes.php`): asocia la URL `/grupos` con el controlador.
2. **Controlador** (`app/Controllers/Grupos.php`): pide los datos al modelo.
3. **Modelo** (`app/Models/GrupoModel.php`): devuelve la lista de grupos (datos fijos).
4. **Vista** (`app/Views/grupos/index.php`): pinta el HTML con los grupos.

## Requisitos

- PHP 8.2 o superior, con las extensiones `intl` y `mbstring`
- [Composer](https://getcomposer.org/)
- Para conectar a base de datos en el futuro: PHP con la extensión `mysqli`

## Instalación

```bash
# 1. Instalar dependencias (carpeta vendor/)
composer install

# 2. Crear la configuración de entorno (opcional, si falta)
cp env .env
#   y editar .env: baseURL, y si habrá BD, hostname/database/username/password

# 3. Iniciar el servidor de desarrollo
php spark serve
```

Abrí en el navegador: <http://localhost:8080/grupos>

> Nota: este proyecto funciona **sin base de datos**; los grupos son datos fijos
> en el modelo. Para usar una BD real, activá `mysqli` en PHP, configurá `.env`
> y adaptá `GrupoModel` al modelo de CodeIgniter con su tabla.

## Estructura clave

```
app/
├── Config/Routes.php        → definición de rutas
├── Controllers/Grupos.php   → controlador (lógica de la petición)
├── Models/GrupoModel.php    → modelo (origen de datos)
└── Views/grupos/index.php   → vista (HTML y CSS)
```

## Seguridad

- `.env` está en `.gitignore`: las credenciales nunca se suben al repositorio.
- Scripts y artefactos internos del framework (`builds`) se mantienen en `tools/`
  por referencia, sin formar parte de la aplicación.
- Con un método por defecto, `public/` es la única carpeta expuesta al servidor web.

## Licencia

El contenido de esta aplicación sigue la misma licencia del framework:
[MIT](LICENSE).
