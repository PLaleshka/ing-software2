<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model
{
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
