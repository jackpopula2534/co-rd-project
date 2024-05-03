<?php

namespace App\Livewire\Rawmaterial;

use Livewire\Component;
use Illuminate\Support\Collection;

class GlobalCompo extends Component
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
        $rm_list = [
            [
                'id' => 1,
                'img' => 'https://napiers.net/cdn/shop/products/Napiers-220531DGM-02025-Edit.jpg?v=1654862264',
                'name' => 'BAROSMA BETULINA LEAF EXTRACT',
                'code' => 'RM000001',
                'rm_cas_number' => '84649-93-4',
                'rm_origin' => 'Native to South Africa, also cultivated in countries like Australia, New Zealand, and the United States.',
                'other_languages' => 'Buchu, Agathosma betulina, Barosmæ blade, Buchuの葉, 부추잎, 부추',
                'inci_name_head' => [
                    'id' => 1,
                    'inci_name_line' => [
                        'id' => 1,
                        'name' => 'Barosma Betulina Leaf Extract',
                        'language_code' => 'EN',
                    ],
                ],
                'einecs_elincs' => '283-474-3',
                'food_additive' => 'Not approved for use as a food additive in the United States or Europe. May be used as a flavoring agent in some countries.',
                'classification' => 'Antioxidant,Anti-inflammatory,Antimicrobial,Diuretic,Disinfectant,Herbal remedy',
                'rm_namely' => 'As for skincare, the main active component of Buchu leaves is a flavonoid called diosmin that can act as an APN (aminopeptidase N) inhibitor. APN is an enzyme that plays some role in the sebocyte (the skin cells that create sebum) differentiation and sebum generation process and inhibiting it means less sebum produced by the skin.',
                'slide' => [],
                'rm_functions' => [
                    [
                        'id' => 1,
                        'title' => 'Functional Ingredient',
                        'detail' => 'In cosmetics and personal care products, Glycerin Monostearyl Ether acts as an emulsifier, helping to combine oil and water together, and as a thickener. This allows for the creation of stable and smooth lotions, creams, and ointments.',

                    ],
                    [
                        'id' => 2,
                        'title' => 'Anti-inflammatory properties',
                        'detail' => 'Some studies suggest that Glycerin Monostearyl Ether may have anti-inflammatory properties. This is because it can help to reduce the production of inflammatory mediators in the skin. However, more research is needed to confirm this effect.',

                    ],
                    [
                        'id' => 3,
                        'title' => 'Acne-reducing properties',
                        'detail' => 'Glycerin Monostearyl Ether may also have some benefits for acne. It can help to keep pores clear and prevent breakouts. However, more research is needed to determine its effectiveness for treating acne.',

                    ],
                ],
                'rm_product' => [
                    [
                        'id' => 1,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Krisco tone up body lotion',
                        'code' => 'PD000001',
                        'percent' => 53.21
                    ],
                    [
                        'id' => 2,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Dr.Jel honey moon cleansing',
                        'code' => 'PD000002',
                        'percent' => 43.19
                    ],
                    [
                        'id' => 3,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Her hyness hydra glow advance skin booster cream',
                        'code' => 'PD000003',
                        'percent' => 35.54
                    ]
                ],
            ], [
                'id' => 2,
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt1N3zQBQeZOr15oGZYc67pJTiRt2KG5TH8Q&usqp=CAU',
                'name' => 'Kojic Acid',
                'code' => 'RM000002',
                'rm_cas_number' => '506-79-1',
                'rm_origin' => 'Produced by several fungal species, including Aspergillus oryzae and Aspergillus flavus. It can also be obtained from some bacteria. Kojic acid is not typically extracted directly from a natural source for commercial use; it is usually produced through fermentation processes.',
                'other_languages' => 'Kojikku-san, Acide kojique, Ácido kójico, Kojinsäure',
                'inci_name_head' => [
                    'id' => 1,
                    'inci_name_line' => [
                        'id' => 1,
                        'name' => 'Kojic Acid',
                        'language_code' => 'EN',
                    ],
                ],
                'einecs_elincs' => '208-067-2',
                'food_additive' => 'Not approved for use as a food additive in the United States or Europe.,In some countries, it has limited approval for use as a food preservative or chelating agent. However, its use is restricted due to safety concerns.',
                'classification' => 'Skin lightening agent,Antioxidant,Chelating agent (binds to metal ions),Antifungal agent (weak)',
                'rm_namely' => 'Kojic acid can irritate the skin and may cause allergic reactions in some people.,Concerns exist regarding its potential carcinogenicity, although evidence is inconclusive.,Use of Kojic acid in cosmetics is restricted in some countries.',
                'slide' => [],
                'rm_functions' => [
                    [
                        'id' => 4,
                        'title' => 'Skin lightening agent',
                        'detail' => 'Kojic acid works by inhibiting the production of tyrosinase, an enzyme involved in melanin production. This can help to fade dark spots, age spots, and freckles.',

                    ],
                    [
                        'id' => 5,
                        'title' => 'Antioxidant',
                        'detail' => 'Kojic acid can help to protect the skin from damage caused by free radicals.',

                    ],
                    [
                        'id' => 6,
                        'title' => 'Chelating agent',
                        'detail' => 'Kojic acid can bind to metal ions, which can help to prevent them from causing damage to the skin.',

                    ],
                    [
                        'id' => 7,
                        'title' => 'Antifungal agent (weak)',
                        'detail' => 'Kojic acid has some antifungal activity, but it is not strong enough to be used as a primary treatment for fungal infections.',

                    ],
                ],
                'rm_product' => [
                    [
                        'id' => 1,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'W-diary Anti aging sensitive body sunscreen',
                        'code' => 'PD000004',
                        'percent' => 73.5
                    ],
                    [
                        'id' => 2,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Gluta tone up sun protect SPF50 PA+++',
                        'code' => 'PD000005',
                        'percent' => 63.91
                    ],
                    [
                        'id' => 3,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Molegram skin supplement',
                        'code' => 'PD000006',
                        'percent' => 41.25
                    ],
                    [
                        'id' => 4,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Body lotion',
                        'code' => 'PD000007',
                        'percent' => 25.33
                    ],
                    [
                        'id' => 5,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Cleansing Foam',
                        'code' => 'PD000007',
                        'percent' => 15.17
                    ]
                ],
            ], [
                'id' => 3,
                'img' => 'https://www.myskinrecipes.com/shop/5415-home_default/peg-ppg-polybutylene-glycol-8-5-3-glycerin.jpg',
                'name' => 'Glycerin',
                'code' => 'RM000003',
                'rm_cas_number' => '56-81-5',
                'rm_origin' => 'Glycerin is naturally found in fats and oils, and can be obtained during soap production as a byproduct. It can also be synthetically produced from propene.',
                'other_languages' => 'Glycerol, Glycerine, گلیسرین (Persian), グリセリン (Japanese)',
                'inci_name_head' => [
                    'id' => 1,
                    'inci_name_line' => [
                        'id' => 1,
                        'name' => 'Glycerin',
                        'language_code' => 'EN',
                    ],
                ],
                'einecs_elincs' => '208-067-2',
                'food_additive' => 'Approved by the FDA for use as a food additive in the United States. It is used as a humectant, solvent, and sweetener in various foods and beverages.',
                'classification' => 'Humectant (attracts moisture), Solvent, Sweetener, Emollient (softens skin), Antifreeze',
                'rm_namely' => 'Generally safe for use in cosmetics and food. However, high concentrations can cause skin irritation.',
                'slide' => [],
                'rm_functions' => [
                    [
                        'id' => 8,
                        'title' => 'Humectant',
                        'detail' => 'Glycerin attracts moisture from the air and the deeper layers of the skin, helping to keep it hydrated and plump.'
                    ],
                    [
                        'id' => 9,
                        'title' => 'Solvent',
                        'detail' => 'Glycerin dissolves various substances, making it useful in many cosmetic and pharmaceutical formulations.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Sweetener',
                        'detail' => 'Glycerin has a slightly sweet taste and can be used as a natural sweetener in some foods and beverages.'
                    ],
                    [
                        'id' => 10,
                        'title' => 'Emollient',
                        'detail' => 'Glycerin softens and smooths the skin by forming a protective layer and reducing dryness.'
                    ],
                    [
                        'id' => 11,
                        'title' => 'Antifreeze',
                        'detail' => 'Due to its low freezing point, glycerin is used in some products to prevent them from freezing.'
                    ],
                ],
                'rm_product' => [
                    [
                        'id' => 1,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'W-diary Anti aging sensitive body sunscreen',
                        'code' => 'PD000004',
                        'percent' => 88.67
                    ],
                    [
                        'id' => 2,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Gluta tone up sun protect SPF50 PA+++',
                        'code' => 'PD000005',
                        'percent' => 75
                    ]
                ],
            ], [
                'id' => 4,
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjqtC3NVx7KnkFFYwhcnm5j6_V0NnkRJoHeA&usqp=CAU',
                'name' => 'Tranexamic Acid',
                'code' => 'RM000001',  'rm_cas_number' => '99-76-3',
                'rm_origin' => 'Tranexamic acid is a synthetic medication, not found naturally.',
                'other_languages' => 'English (Tranexamic Acid), French (Acide tranexamique), Spanish (Ácido tranexámico), German (Tranexamsäure)',
                'inci_name_head' => [
                    'id' => 4,
                    'inci_name_line' => [
                        'id' => 4,
                        'name' => 'Tranexamic Acid',
                        'language_code' => 'EN'
                    ]
                ],
                'einecs_elincs' => '202-767-0',
                'food_additive' => 'Not approved for use as a food additive.',
                'classification' => 'Antifibrinolytic (inhibits blood clot breakdown)',
                'rm_namely' => 'Tranexamic acid can be helpful in reducing heavy menstrual bleeding. However, it can cause side effects and should only be taken under the supervision of a doctor. See a doctor right away if you experience serious side effects.',
                'slide' => [],
                'rm_functions' => [
                    [
                        "id" => 12,
                        "title" => "Antifibrinolytic",
                        "detail" => "Tranexamic acid inhibits the breakdown of blood clots by blocking a substance called plasminogen activator. This can be helpful in reducing heavy menstrual bleeding or bleeding after surgery."
                    ],
                ],
                'rm_product' => [
                    [
                        'id' => 1,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'W-DIARY LIGHT-RADIANCE INTENSIVE CLOUD LOTION Ve...',
                        'code' => 'PD000006',
                        'percent' => 88.67
                    ],
                    [
                        'id' => 2,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'BHA Liquid Exfoliant',
                        'code' => 'PD000007',
                        'percent' => 75
                    ],
                    [
                        'id' => 2,
                        'img' => 'https://images.unsplash.com/photo-1638389978802-1519896881b1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'name' => 'Cancer capsule',
                        'code' => 'PD000008',
                        'percent' => 43.3
                    ]
                ],
            ]
        ];

        return view('livewire.rawmaterial.global-compo', [
            'rm_list' => $rm_list,
            'type' => 1,
            'rmDetail' => $this->rmDetail  // Corrected property name
        ]);
    }
}
