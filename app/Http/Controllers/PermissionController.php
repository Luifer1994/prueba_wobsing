<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Rol;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function listByRol()
    {
       $rol = Permission::select('permissions.*','rols.id as id_rol','rols.name as name_rol')
       ->join('roles_permissions', 'roles_permissions.permission_id','permissions.id')
       ->join('rols','rols.id', 'roles_permissions.rol_id')
       ->where('rols.id', 1)->get();
       return $rol;
    }
}
    