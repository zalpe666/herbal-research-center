<?php

namespace Database\Seeders;

use App\Models\PlantHerb;
use App\Models\Variation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Pupuk',
                'slug' => 'pupuk',
                'is_herb' => 'no',
                'product_type' => 'fertilizer',
                'variations' => [
                    [
                        'unit' => '5 kg',
                        'price' => 15000,
                    ],
                ],
            ],

            [
                'name' => 'POC',
                'slug' => 'poc',
                'is_herb' => 'no',
                'product_type' => 'fertilizer',
                'variations' => [
                    [
                        'unit' => '250 ml',
                        'price' => 15000,
                    ],
                    [
                        'unit' => '100 ml',
                        'price' => 10000,
                    ],
                ],
            ],

            [
                'name' => 'Hand Soap',
                'slug' => 'hand-soap',
                'is_herb' => 'no',
                'product_type' => 'soap',
                'variations' => [
                    [
                        'unit' => '250 ml',
                        'price' => 15000,
                    ],
                    [
                        'unit' => '100 ml',
                        'price' => 10000,
                    ],
                ],
            ],

            [
                'name' => 'Alokasia Amazonica',
                'slug' => 'alokasia-amazonica',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 25000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 40000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 60000,
                    ],
                ],
            ],

            [
                'name' => 'Nona Makan Sirih',
                'slug' => 'nona-makan-sirih',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 20000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 35000,
                    ],
                ],
            ],

            [
                'name' => 'Ekor Kucing',
                'slug' => 'ekor-kucing',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 20000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 35000,
                    ],
                ],
            ],

            [
                'name' => 'Melati',
                'slug' => 'melati',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 20000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 35000,
                    ],
                ],
            ],

            [
                'name' => 'Melati Melur',
                'slug' => 'melati-melur',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 20000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 40000,
                    ],
                ],
            ],

            [
                'name' => 'Petrea',
                'slug' => 'petrea',
                'is_herb' => 'no',
                'product_type' => 'plant',
                'variations' => [
                    [
                        'unit' => 'Pot',
                        'price' => 15000,
                    ],
                    [
                        'unit' => 'Pot',
                        'price' => 30000,
                    ],
                ],
            ],
        ];

        foreach ($products as $productData) {

            $variations = $productData['variations'];

            unset($productData['variations']);

            $product = PlantHerb::updateOrCreate(
                [
                    'slug' => $productData['slug'],
                ],
                $productData
            );

            foreach ($variations as $variationData) {

                Variation::updateOrCreate(
                    [
                        'id_herb' => $product->id,
                        'unit' => $variationData['unit'],
                        'price' => $variationData['price'],
                    ],
                    [
                        'image' => 'https://picsum.photos/200',
                    ]
                );
            }
        }
    }
}