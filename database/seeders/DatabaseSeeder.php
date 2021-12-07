<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Rol;
use App\Models\User;
use App\Models\RolesPermission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Rol::factory(3)->create();
        Permission::factory(5)->create();
        User::factory(10)->create();
        RolesPermission::factory(5)->create();
    }
}
