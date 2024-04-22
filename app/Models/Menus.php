<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'menu_roles');
    }
}
