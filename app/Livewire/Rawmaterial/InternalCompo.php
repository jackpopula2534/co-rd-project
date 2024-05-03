<?php

namespace App\Livewire\Rawmaterial;

use Livewire\Component;

class InternalCompo extends Component
{

    public $rmDetail = [];
    public $subPageNumber = 1;

    public function changePage($number)
    {

        $this->subPageNumber = $number;

        // return $this->subPageNumber;
    }

    public function getDetail($jsonValue)
    {
        $data = json_decode($jsonValue, true);  // Convert JSON string back to array
        $this->subPageNumber = 1;
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
                [
                    'file_path' => '-',
                    'file_name' => 'ANTHOCYANINS-20240502-th',
                    'language_code' => 'TH',
                    'language' => ['code' => 'TH', 'name_th' => 'ไทย', 'name_en' => 'Thai']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'ANTHOCYANINS-20240502-en',
                    'language_code' => 'EN',
                    'language' => ['code' => 'EN', 'name_th' => 'อังกฤษ', 'name_en' => 'English']
                ]
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
            'rm_product' => [
                [
                    'id' => 1,
                    'img' => 'https://img.freepik.com/free-photo/high-angle-foundation-containers-assortment_23-2149705542.jpg?t=st=1714473585~exp=1714477185~hmac=0096365e276543c952659b21b59d4361604f2dea347a5cc29c69f9f9a5563633&w=740',
                    'name' => 'W-DIARY LIGHT-RADIANCE INTENSIVE CLOUD LOTION Ve...',
                    'code' => 'PD000006',
                    'percent' => 88.67
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/monochrome-beauty-product-skincare_23-2151307343.jpg?t=st=1714473614~exp=1714477214~hmac=b8b887068ed085a3ef318ed44a2ef5b954f8bffa6addbb6a92e63156e79526a3&w=1380',
                    'name' => 'BHA Liquid Exfoliant',
                    'code' => 'PD000007',
                    'percent' => 75
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/flat-lay-toilet-bag-products_23-2149879457.jpg?t=st=1714473602~exp=1714477202~hmac=23bb076d86478b926b8814b75742d85c1b9348ad92236c845a844e3c8e71b80d&w=1380',
                    'name' => 'Cancer capsule',
                    'code' => 'PD000008',
                    'percent' => 43.3
                ]
            ],
        ], [
            'id' => 4,
            'img' => 'https://images.unsplash.com/photo-1638389988011-97a494be31ef?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'DICOCODIMETHYLAMINE DILINOLEATE',
            'sub_detail' => 'Amines, coco alkyl, N,N-dimethyl, salts with linoleic acid dimer',
            'code' => 'IN000004',
            'slide' => [
                [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-th',
                    'language_code' => 'TH',
                    'language' => ['code' => 'TH', 'name_th' => 'ไทย', 'name_en' => 'Thai']
                ],
                [
                    'file_path' => null,
                    'file_name' => null,
                    'language_code' => 'EN',
                    'language' => ['code' => 'EN', 'name_th' => 'อังกฤษ', 'name_en' => 'English']
                ], [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-cn',
                    'language_code' => 'CN',
                    'language' => ['code' => 'CN', 'name_th' => 'จีน', 'name_en' => 'Chinese']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-jp',
                    'language_code' => 'JP',
                    'language' => ['code' => 'JP', 'name_th' => 'ญี่ปุ่น', 'name_en' => 'Japanese']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-kr',
                    'language_code' => 'KR',
                    'language' => ['code' => 'KR', 'name_th' => 'เกาหลี', 'name_en' => 'Korean']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-fr',
                    'language_code' => 'FR',
                    'language' => ['code' => 'FR', 'name_th' => 'ฝรั่งเศส', 'name_en' => 'French']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'DICOCODIMETHYLAMINE-DILINOLEATE-20240502-es',
                    'language_code' => 'ES',
                    'language' => ['code' => 'ES', 'name_th' => 'สเปน', 'name_en' => 'Spanish']
                ]

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
            'rm_product' => [
                [
                    'id' => 1,
                    'img' => 'https://img.freepik.com/free-photo/view-make-up-foundation-skin-product_23-2149736928.jpg?t=st=1714473944~exp=1714477544~hmac=2049691f9a391319f64b5787fc22a74cb1121fa2dfab1a81688de7ac3bbe75e2&w=740',
                    'name' => 'Krisco tone up body lotion',
                    'code' => 'PD000001',
                    'percent' => 53.21
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/high-angle-lipstick-stand_23-2149234348.jpg?t=st=1714473964~exp=1714477564~hmac=ea44aaf1f7a3d058d18048749e1ed1b8b007c93ff6a7ebb0fc8be9bd08c75273&w=740',
                    'name' => 'Dr.Jel honey moon cleansing',
                    'code' => 'PD000002',
                    'percent' => 43.19
                ],
                [
                    'id' => 3,
                    'img' => 'https://img.freepik.com/free-photo/beauty-care-cosmetic-product-with-pink-tones_23-2151005555.jpg?t=st=1714473986~exp=1714477586~hmac=89a03d72db8ce375ad7a186e224e83ca55ed8c3176d9efa30b36ed31e4b490e4&w=1380',
                    'name' => 'Her hyness hydra glow advance skin booster cream',
                    'code' => 'PD000003',
                    'percent' => 35.54
                ]
            ],
        ], [
            'id' => 2,
            'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'HYDROGENATED VEGETABLE GLYCERIDE',
            'sub_detail' => 'Glycerides, vegetable-oil, hydrogenated',
            'code' => 'IN000002',
            'slide' => [
                [
                    'file_path' => null,
                    'file_name' => null,
                    'language_code' => 'TH',
                    'language' => ['code' => 'TH', 'name_th' => 'ไทย', 'name_en' => 'Thai']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'HYDROGENATED-VEGETABLE-GLYCERIDE-20240502-en',
                    'language_code' => 'EN',
                    'language' => ['code' => 'EN', 'name_th' => 'อังกฤษ', 'name_en' => 'English']
                ]
            ],
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
            'rm_product' => [
                [
                    'id' => 1,
                    'img' => 'https://img.freepik.com/free-photo/face-cream-container-with-plant_23-2148549147.jpg?t=st=1714473753~exp=1714477353~hmac=7f1a6ddd05dd91ed9dd2a6f685911aa86e05ab0131cc1d7ca25a40e9b269b058&w=1380',
                    'name' => 'W-diary Anti aging sensitive body sunscreen',
                    'code' => 'PD000004',
                    'percent' => 88.67
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/makeup-tools_23-2148109567.jpg?t=st=1714473731~exp=1714477331~hmac=a161218451bd784c02c64238818ad993a314d38b4e6d0643e23a857235a84036&w=740',
                    'name' => 'Gluta tone up sun protect SPF50 PA+++',
                    'code' => 'PD000005',
                    'percent' => 75
                ]
            ],
        ], [
            'id' => 3,
            'img' => 'https://images.unsplash.com/photo-1615871155311-31296e92174b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'OLUS OIL',
            'sub_detail' => 'Olus Oil is an expressed oil of vegetable origin consisting primarily of triglycerides of fatty acids',
            'code' => 'IN000003',
            'slide' => [
                [
                    'file_path' => '-',
                    'file_name' => 'OLUS-OIL-20240502-th',
                    'language_code' => 'TH',
                    'language' => ['code' => 'TH', 'name_th' => 'ไทย', 'name_en' => 'Thai']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'OLUS-OIL-20240502-en',
                    'language_code' => 'EN',
                    'language' => ['code' => 'EN', 'name_th' => 'อังกฤษ', 'name_en' => 'English']
                ]
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
            'rm_product' => [
                [
                    'id' => 1,
                    'img' => 'https://img.freepik.com/free-photo/3d-rendering-personal-care-products-fondant-pink_23-2151053839.jpg?t=st=1714473719~exp=1714477319~hmac=bf9b016f9f3bad7d45cf24a478e848677e8d1d6242f274adee5fc503328cccc2&w=1380',
                    'name' => 'W-diary Anti aging sensitive body sunscreen',
                    'code' => 'PD000004',
                    'percent' => 73.5
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/plastic-containers-orange-background_23-2148549135.jpg?t=st=1714473809~exp=1714477409~hmac=2953d585283445250908027a1e46eb41f16d0448536ab304695be2dee1eeb053&w=1380',
                    'name' => 'Gluta tone up sun protect SPF50 PA+++',
                    'code' => 'PD000005',
                    'percent' => 63.91
                ],
                [
                    'id' => 3,
                    'img' => 'https://img.freepik.com/free-photo/close-up-body-butter-recipient_23-2148543039.jpg?t=st=1714473824~exp=1714477424~hmac=40f4a13c0cc931937a1fc721c54682e83eba0596e5a52fbc510b642364f770b4&w=1380',
                    'name' => 'Molegram skin supplement',
                    'code' => 'PD000006',
                    'percent' => 41.25
                ],
                [
                    'id' => 4,
                    'img' => 'https://img.freepik.com/free-photo/minimal-arrangement-beauty-products_23-2148961322.jpg?t=st=1714473837~exp=1714477437~hmac=a4ff041d6deffb328b3db616a942a9742b6c80892f18201727af058d62303635&w=1380',
                    'name' => 'Body lotion',
                    'code' => 'PD000007',
                    'percent' => 25.33
                ],
                [
                    'id' => 5,
                    'img' => 'https://img.freepik.com/free-photo/top-view-collection-beauty-products-with-copy-space_23-2148620001.jpg?t=st=1714473863~exp=1714477463~hmac=939658866861e22c1ed3df3c1f3ab0fce1081d364ff333fd823285bbd75055de&w=740',
                    'name' => 'Cleansing Foam',
                    'code' => 'PD000007',
                    'percent' => 15.17
                ]
            ],
        ], [
            'id' => 5,
            'img' => 'https://images.unsplash.com/photo-1503236823255-94609f598e71?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'C21-28 ALKANE',
            'sub_detail' => 'C21-28 Alkane is a mixture of alkanes with 21 to 28 carbon atoms in the alkyl chain',
            'code' => 'IN000005',
            'slide' => [
                [
                    'file_path' => '-',
                    'file_name' => 'C21-28-ALKANE-20240502-th',
                    'language_code' => 'TH',
                    'language' => ['code' => 'TH', 'name_th' => 'ไทย', 'name_en' => 'Thai']
                ],
                [
                    'file_path' => null,
                    'file_name' => null,
                    'language_code' => 'EN',
                    'language' => ['code' => 'EN', 'name_th' => 'อังกฤษ', 'name_en' => 'English']

                ],
                [
                    'file_path' => '-',
                    'file_name' => 'C21-28-ALKANE-20240502-kr',
                    'language_code' => 'KR',
                    'language' => ['code' => 'KR', 'name_th' => 'เกาหลี', 'name_en' => 'Korean']
                ], [
                    'file_path' => '-',
                    'file_name' => 'C21-28-ALKANE-20240502-cn',
                    'language_code' => 'CN',
                    'language' => ['code' => 'CN', 'name_th' => 'จีน', 'name_en' => 'Chinese']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'C21-28-ALKANE-20240502-jp',
                    'language_code' => 'JP',
                    'language' => ['code' => 'JP', 'name_th' => 'ญี่ปุ่น', 'name_en' => 'Japanese']
                ],
                [
                    'file_path' => '-',
                    'file_name' => 'C21-28-ALKANE-20240502-es',
                    'language_code' => 'ES',
                    'language' => ['code' => 'ES', 'name_th' => 'สเปน', 'name_en' => 'Spanish']
                ]
            ],
            'replacement' => [],
            'rm_component' => [],
            'rm_product' => [
                [
                    'id' => 1,
                    'img' => 'https://img.freepik.com/free-photo/minimal-arrangement-beauty-products_23-2148961319.jpg?t=st=1714474033~exp=1714477633~hmac=fec5538a6f3bfd17ac23be61bbffdfdc0865a32234e0ab6446ba12cccce7635d&w=740',
                    'name' => 'W-diary Anti aging sensitive body sunscreen',
                    'code' => 'PD000004',
                    'percent' => 88.67
                ],
                [
                    'id' => 2,
                    'img' => 'https://img.freepik.com/free-photo/cosmetic-male-beauty-products-with-display_23-2150435204.jpg?t=st=1714474074~exp=1714477674~hmac=461daf062ffa1e356ebe3e5bc919a399a2667d1a49ce43662fd693d574bbedd5&w=1380',
                    'name' => 'Gluta tone up sun protect SPF50 PA+++',
                    'code' => 'PD000005',
                    'percent' => 75
                ]
            ],
        ]];

        return view('livewire.rawmaterial.internal-compo', [
            'rm_list' => $rm_list,
            'type' => 2,
            'rmDetail' => $this->rmDetail,  // Corrected property name
            'subPageNumber' => $this->subPageNumber
        ]);
    }
}
