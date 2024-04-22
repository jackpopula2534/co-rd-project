<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Menus;

class Sidebar extends Component
{
    public $menus;
    public $activeMenu;
    public function mount()
    {
        $this->loadMenus();
    }

    public function loadMenus()
    {
        if (!Auth::check()) {
            $this->menus = [];  // Optionally handle this as appropriate for your app
            return;
        }

        $user = Auth::user();
        $roleIds = $user->roles->id;

        // ตรวจสอบ $roleIds
        if ($roleIds === 1) {
            // แสดงข้อมูล Menus ทั้งหมด
            $this->menus = Menus::all();
        } else {
            // แสดงข้อมูล Menus ตามบทบาท
            $this->menus = Menus::whereHas('roles', function ($query) use ($roleIds) {
                $query->where('id', $roleIds);
            })->get();
        }

        // Set the default active menu to the title of the first menu item, if available
        if (!empty($this->menus->first())) {
            $this->activeMenu = $this->menus->first()->title;
        }
    }
    public function setActiveMenu($menuName, $link)
    {
        $this->activeMenu = $menuName;
        return redirect()->to($link);
    }
    public function render()
    {
        return view('livewire.components.sidebar', ['menus' => $this->menus]);
    }
}
