<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = [
        'roles_name', 'roles_code', 'description'
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Role model
    public function menus()
    {
        return $this->belongsToMany(Menus::class, 'menu_roles');
    }
}
