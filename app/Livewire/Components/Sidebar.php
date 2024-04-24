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
        if ($user->roles_id == 1) {
            // Admin role has id = 1, they see all menus
            $this->menus = Menus::with('children')->whereNull('parent_id')->get();
        } else {
            $user = auth()->user();
            // Non-admin roles see specific menus
            $this->menus = Menus::whereHas('accessmenu', function ($query) use ($user) {
                $query->where(function ($q) {
                    $q->whereNull('roles_id')
                        ->whereNull('company_id')
                        ->whereNull('user_id');
                })->orWhere(function ($q) use ($user) {
                    $q->where('company_id', $user->companies_id)
                        ->whereNull('roles_id')
                        ->whereNull('user_id');
                })->orWhere(function ($q) use ($user) {
                    $q->whereNull('company_id')
                        ->where('roles_id', $user->roles_id)
                        ->whereNull('user_id');
                })->orWhere(function ($q) use ($user) {
                    $q->whereNull('roles_id')
                        ->whereNull('company_id')
                        ->where('user_id', $user->id);
                })->orWhere(function ($q) use ($user) {
                    $q->where('company_id', $user->companies_id)
                        ->where('roles_id', $user->roles_id)
                        ->where('user_id', $user->id);
                })->orWhere(function ($q) use ($user) {
                    $q->where('company_id', $user->companies_id)
                        ->where('roles_id', $user->roles_id)
                        ->whereNull('user_id');
                })->orWhere(function ($q) use ($user) {
                    $q->whereNull('company_id')
                        ->where('roles_id', $user->roles_id)
                        ->where('user_id', $user->id);
                })->orWhere(function ($q) use ($user) {
                    $q->where('company_id', $user->companies_id)
                        ->whereNull('roles_id')
                        ->where('user_id', $user->id);
                });
            })->whereNull('parent_id')->get();
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
