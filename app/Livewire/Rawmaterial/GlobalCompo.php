<?php

namespace App\Livewire\Rawmaterial;

use Livewire\Component;
use Illuminate\Support\Collection;
class GlobalCompo extends Component
{

    public function render()
    {
        $rm_list = [
            [
            'img' => 'https://images.unsplash.com/photo-1683355739325-f7d2e22eaddd?q=80&w=1548&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Immiscible',
            'code' => 'GB000001',
            'slide' => [],
        ], [
            'img' => 'https://images.unsplash.com/photo-1666425324584-b4cd0f223abc?q=80&w=1546&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Lemons',
            'code' => 'GB000002',
            'slide' => [],
        ], [
            'img' => 'https://images.unsplash.com/photo-1651129926049-d4f0b587ce93?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Yellow abstract',
            'code' => 'GB000003',
            'slide' => [],
        ], [
            'img' => 'https://plus.unsplash.com/premium_photo-1667811951674-e67277716846?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => ' Green Surface',
            'code' => 'GB000004',
            'slide' => [],
        ], [
            'img' => 'https://images.unsplash.com/photo-1683355739329-cea18ba93f02?q=80&w=1548&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Fragrant Roses',
            'code' => 'GB000005',
            'slide' => [],
        ]];

        return view('livewire.rawmaterial.global-compo', [
            'rm_list' => $rm_list,
            'type' => 1,
        ]);
    }
}
