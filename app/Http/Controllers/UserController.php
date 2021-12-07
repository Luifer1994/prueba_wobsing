<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listByRole()
    {
        $users = User::select('users.*', 'rols.name as name_rol')
            ->join('rols', 'users.rol_id', 'rols.id')
            ->where('rol_id', '<=', 2)->get();
        return $users;
    }

    public function listUserRoleByPermission()
    {
        $data = User::select('users.*', 'rols.name as name_rol', 'permissions.id as id_permission', 'permissions.name as name_permission')
            ->join('rols', 'users.rol_id', '=', 'rols.id')
            ->join('roles_permissions', 'rols.id', 'roles_permissions.rol_id')
            ->join('permissions', 'roles_permissions.permission_id', 'permissions.id')
            ->where('roles_permissions.permission_id', 2)
            ->get();

        return $data;
    }

    public function correctionArray()
    {
        $usuarios = [
            ['nombre' => 'Alex', 'apellido'  => 'Escobar', 'telefono'=> '321212121'],
            ['nombre' => 'Juan', 'apellido'  => 'Gomez', 'telefono'  => '321212121'],
            ['nombre' => 'Andres', 'apellido'=> 'Marín', 'telefono'  => '321212121'],
            ['nombre' => 'Angie', 'apellido' => 'Rivera', 'telefono' => '321212121'],
        ];
        foreach ($usuarios as $usuario) {
            echo $usuario['nombre'] . ' ' . $usuario['apellido'] . ' ' . $usuario['telefono'] . '<br>';
        }
    }
}
