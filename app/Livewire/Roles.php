<?php

namespace App\Livewire;

use App\Models\Roles as ModelsRoles;
use Livewire\Component;
use Livewire\WithPagination;
class Roles extends Component
{
    use WithPagination; // ใช้ trait WithPagination เพื่อจัดการการแบ่งหน้าข้อมูล
    public $search = ''; // ตัวแปรเก็บคำที่ต้องการค้นหา
    public function updatingSearch()
    {
        // เมื่อมีการอัปเดตค่าใน $search ให้รีเซ็ตเพจกลับไปหน้าแรก
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.roles', [
            'roles' => ModelsRoles::search(['roles_name', 'roles_code','description'], $this->search, 'contains', 'or')->paginate(5),
        ]);
    }
}
