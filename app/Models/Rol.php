<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $hidden = ['pivot'];

    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function Permission()
    {
        return $this->belongsToMany(Permission::class,'roles_permissions');
    }
}
