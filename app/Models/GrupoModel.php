<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model
{
    public function __construct()
    {
        // Este modelo aún no usa base de datos, por eso no llamamos al constructor
        // del padre, que intentaría conectar a la base de datos.
    }

    public function obtenerGrupos()
    {
        return [
            [
                'id' => 1,
                'nombre' => 'Grupo de trabajo 1'
            ],
            [
                'id' => 2,
                'nombre' => 'Grupo de trabajo 2'
            ]
        ];
    }
}
