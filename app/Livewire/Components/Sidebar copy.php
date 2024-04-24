<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Menus;

class Sidebar extends Component
{
    public $menus;

    public function mount()
    {
        $this->loadMenus();
    }

    protected function loadMenus()
    {
        if (!Auth::check()) {
            $this->menus = [];
            return;
        }

        $user = Auth::user();
        // Assuming user might have multiple roles
        $roleIds = $user->roles->id;
        if ($roleIds->contains(1)) {
            // Admin role has id = 1, they see all menus
            $this->menus = Menus::with('children')->whereNull('parent_id')->get();
        } else {
            // Non-admin roles see specific menus
            $this->menus = Menus::whereHas('roles', function ($query) use ($roleIds) {
                $query->whereIn('id', $roleIds);
            })->with('children')->whereNull('parent_id')->get();
        }

        $this->setDefaultActiveMenu();
    }

    protected function setDefaultActiveMenu()
    {
        if (!session()->has('activeMenu')) {
            session(['activeMenu' => 'หน้าหลัก']);
        }
    }

    public function setActiveMenu($menuName, $link)
    {
        session([
            'activeMenu' => $menuName,
            'activeSubMenu' => "-ASas-",
        ]);

        return redirect()->to($link);
    }

    public function setActiveSubMenu($menuMain, $menuSub, $link)
    {
        session([
            'activeMenu' => $menuMain,
            'activeSubMenu' => $menuSub,
        ]);

        return redirect()->to($link);
    }

    public function render()
    {
        return view('livewire.components.sidebar', ['menus' => $this->menus]);
    }
}
