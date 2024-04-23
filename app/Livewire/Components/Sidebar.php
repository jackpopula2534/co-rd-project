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
            $this->menus = Menus::with('children')->whereNull('parent_id')->get();
        } else {
            // แสดงข้อมูล Menus ตามบทบาท
            $this->menus = Menus::whereHas('roles', function ($query) use ($roleIds) {
                $query->where('id', $roleIds);
            })->with('children')->whereNull('parent_id')->get();
        }

        // Set the default active menu to the title of the first menu item, if available
        if (empty(session('activeMenu'))) {
            session()->flash('activeMenu', 'หน้าหลัก');
        }
    }
    public function setActiveSubMenu($menuMain, $menuSub, $link)
    {
        // Redirect with query parameters
        return redirect()->to($link)->with([
            'activeMenu' => $menuMain,
            'activeSubMenu' => $menuSub,
        ]);

        // Or, redirect with session flash data
        session()->flash('activeMenu', $menuMain);
        session()->flash('activeSubMenu', $menuSub);


        return redirect()->to($link);
    }
    public function setActiveMenu($menuName, $link)
    {
        // Redirect with query parameters
        return redirect()->to($link)->with([
            'activeMenu' => $menuName,
            'activeSubMenu' => "-ASas-",
        ]);

        // Or, redirect with session flash data
        session()->flash('activeMenu', $menuName);
        session()->flash('activeSubMenu', "-ASas-");

        return redirect()->to($link);
    }
    public function render()
    {
        return view('livewire.components.sidebar', ['menus' => $this->menus]);
    }
}
