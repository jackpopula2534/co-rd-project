<?php

namespace App\Livewire\Rawmaterial;

use Livewire\Component;

class InternalCompo extends Component
{
    public function render()
    {

        $rm_list = [[
            'img' => 'https://images.unsplash.com/photo-1615871155311-31296e92174b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Beautiful and fantastic macro photo of water droplets in oil',
            'code' => 'IN000001',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']
            ],
        ], [
            'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Soap foam and bubbles close up',
            'code' => 'IN000002',
            'slide' => [['file_path' => null, 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']],
        ], [
            'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Erlenmeyer flask filled with red, orange and white particles on lab',
            'code' => 'IN000003',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']
            ],
        ], [
            'img' => 'https://images.unsplash.com/photo-1638389988011-97a494be31ef?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Soap foam and bubbles close up',
            'code' => 'IN000004',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => null, 'language_code' => 'EN']
            ],
        ], [
            'img' => 'https://images.unsplash.com/photo-1503236823255-94609f598e71?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'SW-3.001',
            'code' => 'IN000005',
            'slide' => [['file_path' => '-', 'language_code' => 'TH'], ['file_path' => null, 'language_code' => 'EN'], ['file_path' => '-', 'language_code' => 'KR']],
        ]];

        return view('livewire.rawmaterial.internal-compo', [
            'rm_list' => $rm_list,
            'type' => 2,
        ]);
    }
}
