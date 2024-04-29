<?php

namespace App\Livewire\Rawmaterial;

use Livewire\Component;

class InternalCompo extends Component
{

    public $rmDetail = [];

    public function getDetail($jsonValue)
    {
        $data = json_decode($jsonValue, true);  // Convert JSON string back to array

        // Check if new data is valid and not the same as the existing one
        if (!empty($data)) {
            if (empty($this->rmDetail) || $data['id'] != $this->rmDetail['id']) {
                $this->rmDetail = $data;
            } else {
                $this->rmDetail = [];  // Reset if the same ID
            }
        } else {
            $this->rmDetail = [];  // Reset if data is invalid or empty
        }

        return $this->rmDetail;
    }


    public function render()
    {

        $rm_list = [[
            'id' => 1,
            'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'ANTHOCYANINS',
            'sub_detail' => 'Anthocyanins is a substance obtained by the physical processing of edible fruits or vegetables. Enocyanin. Grape skin extract; Anthocyanins, grape',
            'code' => 'IN000001',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']
            ],
            'replacement' => [
                [
                    'id' => 1,
                    'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Betacyanins',
                    'code' => 'IN0000015',
                ],
                [
                    'id' => 2,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Quercetin',
                    'code' => 'IN0000016',
                ]
            ],
            'rm_component' => [
                [
                    'id' => 1,
                    'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cyanidin',
                    'code' => 'CMP000001',
                    'percent' => 45
                ],
                [
                    'id' => 2,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Peonidin',
                    'code' => 'CMP000003',
                    'percent' => 25
                ],
                [
                    'id' => 3,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Malvidin',
                    'code' => 'CMP000003',
                    'percent' => 15
                ],
                [
                    'id' => 3,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Delphinidin',
                    'code' => 'CMP000003',
                    'percent' => 10

                ],
                [
                    'id' => 3,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Petunidin',
                    'code' => 'CMP000003',
                    'percent' => 5
                ]
            ],
        ], [
            'id' => 2,
            'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'HYDROGENATED VEGETABLE GLYCERIDE',
            'sub_detail' => 'Glycerides, vegetable-oil, hydrogenated',
            'code' => 'IN000002',
            'slide' => [['file_path' => null, 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']],
            'replacement' => [
                [
                    'id' => 115,
                    'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cetearyl Alcohol',
                    'code' => 'IN0000115',
                ],
                [
                    'id' => 116,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Stearyl Alcohol',
                    'code' => 'IN0000116',
                ],
                [
                    'id' => 191,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cocoa Butter',
                    'code' => 'IN0000191',
                ],
                [
                    'id' => 45,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Coconut Oil',
                    'code' => 'IN0000045',
                ],
                [
                    'id' => 44,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Olive Oil',
                    'code' => 'IN0000044',
                ]
            ],
            'rm_component' => [
                [
                    'id' => 1,
                    'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Glycerides',
                    'code' => 'CMP000099',
                    'percent' => 65
                ],
                [
                    'id' => 2,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'vegetable-oil',
                    'code' => 'CMP000011',
                    'percent' => 20
                ],
                [
                    'id' => 2,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'hydrogenated',
                    'code' => 'CMP000025',
                    'percent' => 15
                ]
            ],
        ], [
            'id' => 3,
            'img' => 'https://images.unsplash.com/photo-1615871155311-31296e92174b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'OLUS OIL',
            'sub_detail' => 'Olus Oil is an expressed oil of vegetable origin consisting primarily of triglycerides of fatty acids',
            'code' => 'IN000003',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => '-', 'language_code' => 'EN']
            ],
            'replacement' => [
                [
                    'id' => 68,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cetearyl Olivate',
                    'code' => 'IN0000068',
                ],
                [
                    'id' => 121,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Caprylic/Capric Triglyceride',
                    'code' => 'IN0000121',
                ],
                [
                    'id' => 109,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Jojoba Oil',
                    'code' => 'IN0000109',
                ],
                [
                    'id' => 107,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Isopropyl Myristate',
                    'code' => 'IN0000107',
                ]
            ],
            'rm_component' => [
                [
                    'id' => 1,
                    'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Stearic acid',
                    'code' => 'CMP000099',
                    'percent' => 95
                ],
                [
                    'id' => 74,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Oleic acid',
                    'code' => 'CMP000074',
                    'percent' => 15
                ]
            ],
        ], [
            'id' => 4,
            'img' => 'https://images.unsplash.com/photo-1638389988011-97a494be31ef?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'DICOCODIMETHYLAMINE DILINOLEATE',
            'sub_detail' => 'Amines, coco alkyl, N,N-dimethyl, salts with linoleic acid dimer',
            'code' => 'IN000004',
            'slide' => [
                ['file_path' => '-', 'language_code' => 'TH'], ['file_path' => null, 'language_code' => 'EN']
            ],
            'replacement' => [
                [
                    'id' => 487,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cetearyl Olivate',
                    'code' => 'IN0000487',
                ],
                [
                    'id' => 611,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Isopropyl Myristate',
                    'code' => 'IN0000611',
                ],
                [
                    'id' => 134,
                    'img' => 'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'name' => 'Cetyl Alcohol',
                    'code' => 'IN0000134',
                ]
            ],
            'rm_component' => [],
        ], [
            'id' => 5,
            'img' => 'https://images.unsplash.com/photo-1503236823255-94609f598e71?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'C21-28 ALKANE',
            'sub_detail' => 'C21-28 Alkane is a mixture of alkanes with 21 to 28 carbon atoms in the alkyl chain',
            'code' => 'IN000005',
            'slide' => [['file_path' => '-', 'language_code' => 'TH'], ['file_path' => null, 'language_code' => 'EN'], ['file_path' => '-', 'language_code' => 'KR']],
            'replacement' => [],
            'rm_component' => [],
        ]];

        return view('livewire.rawmaterial.internal-compo', [
            'rm_list' => $rm_list,
            'type' => 2,
            'rmDetail' => $this->rmDetail  // Corrected property name
        ]);
    }
}
