<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'link',
        'permission',
        'parent_id',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'menu_roles');
    }

    public function accessmenu()
    {
        return $this->belongsTo(MenuAccess::class,'id','menus_id');
    }


    // Relationship to fetch the parent menu
    public function parent()
    {
        return $this->belongsTo(Menus::class, 'parent_id');
    }

    // Relationship to fetch child menus (submenus)
    public function children()
    {
        return $this->hasMany(Menus::class, 'parent_id');
    }
}
