<?php

namespace App\Controllers;

use App\Models\GrupoModel;

class Grupos extends BaseController
{
    public function index()
    {
        $grupoModel = new GrupoModel();

        $data['grupos'] = $grupoModel->obtenerGrupos();

        return view('grupos/index', $data);
    }
}