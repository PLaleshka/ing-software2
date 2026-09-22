<?php

namespace App\Models;

/**
 * GrupoModel
 *
 * Capa de datos (Modelo) del patrón MVC. La información vive en memoria
 * (un arreglo constante), por lo que no se guarda nada de forma persistente:
 * al reiniciar el servidor los datos vuelven a su estado inicial.
 *
 * No extiende CodeIgniter\Model a propósito: esa clase requiere una conexión a
 * base de datos y este ejemplo funciona sin BD. Mantiene el rol de "modelo"
 * dentro del MVC: es el único responsable de proveer los datos.
 */
class GrupoModel
{
    private const GRUPOS = [
        ['id' => 1, 'nombre' => 'Grupo A', 'materia' => 'Inteligencia Artificial'],
        ['id' => 2, 'nombre' => 'Grupo B', 'materia' => 'Desarrollo Web'],
        ['id' => 3, 'nombre' => 'Grupo C', 'materia' => 'Ciberseguridad'],
    ];

    /**
     * Devuelve la lista completa de grupos.
     *
     * @return list<array{id: int, nombre: string, materia: string}>
     */
    public function obtenerGrupos(): array
    {
        return self::GRUPOS;
    }

    /**
     * Devuelve un grupo por su id, o null si no existe.
     *
     * @return array{id: int, nombre: string, materia: string}|null
     */
    public function obtenerGrupo(int $id): ?array
    {
        foreach (self::GRUPOS as $grupo) {
            if ($grupo['id'] === $id) {
                return $grupo;
            }
        }

        return null;
    }
}