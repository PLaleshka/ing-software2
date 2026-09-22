# Grupos de trabajo académicos

Aplicación web de ejemplo construida con el framework **CodeIgniter 4** (PHP).
Muestra los conceptos básicos del framework mediante el patrón **MVC**:
enrutamiento, controladores, modelos y vistas con layout.

![Estado](https://img.shields.io/badge/CodeIgniter-4.7-red) ![PHP](https://img.shields.io/badge/PHP-%3E%3D8.2-blue)

## ¿Qué hace?

Al visitar `/` o `/grupos` se muestra la lista de grupos de trabajo académicos y,
desde cada uno, se accede a una página de **detalle** (`/grupos/1`). La aplicación
**no usa base de datos**: los datos viven en memoria (un arreglo en el modelo), por
lo que nada se guarda de forma persistente y al reiniciar el servidor vuelven al
estado inicial.

### Flujo de la aplicación

```
petición HTTP  ──►  Router (Routes.php)  ──►  Controlador (Grupos)
                                                │
                                                ▼
                                              Modelo (GrupoModel)  ──►  datos en memoria
                                                │
                                                ▼
                                           Vista (Views/grupos)  ──►  HTML
```

1. **Ruta** (`app/Config/Routes.php`): asocia `/grupos` con el controlador. Muestra
   rutas con nombre (`'as' => 'grupos'`) y con parámetro (`grupos/(:num)`).
2. **Controlador** (`app/Controllers/Grupos.php`): recibe la petición, pide los
   datos al modelo y decide qué vista mostrar (`index` / `detalle`).
3. **Modelo** (`app/Models/GrupoModel.php`): única fuente de datos. Los devuelve
   desde memoria y no depende de ninguna base de datos.
4. **Vista** (`app/Views/`): `layouts/principal.php` define el layout común y las
   vistas de grupo lo heredan con `extend()`. Genera enlaces con `route_to()` y
   escapa el contenido con `esc()`.

## Requisitos

- PHP 8.2 o superior, con las extensiones `intl` y `mbstring`
- [Composer](https://getcomposer.org/)

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

> Nota: este proyecto funciona **sin base de datos**: los datos están en memoria
> dentro del modelo y no se persiste nada. Es una elección deliberada para que el
> ejemplo sea autónomo; el MVC del framework queda igualmente demostrado.

## Estructura de la aplicación

```
app/
├── Config/Routes.php             → definición de rutas (con nombre y parámetro)
├── Controllers/Grupos.php        → controlador: lista y detalle de grupos
├── Models/GrupoModel.php         → modelo: devuelve los datos (en memoria)
└── Views/
    ├── layouts/principal.php     → layout base (HTML + CSS) reutilizable
    └── grupos/
        ├── index.php             → vista: lista de grupos
        └── detalle.php           → vista: ficha de un grupo
```

> El resto de `app/`, `public/`, `writable/` y `spark` corresponde al esqueleto
> del framework y es necesario para que CodeIgniter funcione.

## Seguridad

- `.env` está en `.gitignore`: si se crea, las credenciales nunca se suben al repositorio.
- `public/` es la única carpeta expuesta al servidor web.

## Licencia

El contenido de esta aplicación sigue la misma licencia del framework:
[MIT](LICENSE).
