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

    public function detalle(int $id)
    {
        $grupoModel = new GrupoModel();

        $data['grupo'] = $grupoModel->obtenerGrupo($id);

        // Si el id no existe, respondemos con la página 404 del framework.
        if ($data['grupo'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('grupos/detalle', $data);
    }
}