<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'name' => 'South Africa',
                'children' => [
                    [
                        'name' => 'Eastern Cape',
                        'children' => [
                            [
                                'name' => 'Port Elizabeth',
                            ],
                            [
                                'name' => 'East London',
                            ],
                            [
                                'name' => 'Uitenhage',
                            ],
                            [
                                'name' => 'Bhisho',
                            ],
                            [
                                'name' => 'Umtata',
                            ],
                            [
                                'name' => 'Queenstown',
                            ],
                            [
                                'name' => 'Worcester',
                            ],
                            [
                                'name' => 'Grahamstown',
                            ],
                            [
                                'name' => 'Graaff-Reinet',
                            ],
                            [
                                'name' => 'Aliwal North',
                            ],
                            [
                                'name' => 'Cradock',
                            ],
                            [
                                'name' => 'Middelburg',
                            ],
                            [
                                'name' => 'Port Alfred',
                            ],
                            [
                                'name' => 'Port Saint Johns',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Free State',
                        'children' => [
                            [
                                'name' => 'Bloemfontein',
                            ],
                            [
                                'name' => 'Welkom',
                            ],
                            [
                                'name' => 'Kroonstad',
                            ],
                            [
                                'name' => 'Bethlehem',
                            ],
                            [
                                'name' => 'Brandfort',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Gauteng',
                        'children' => [
                            [
                                'name' => 'Johannesburg',
                            ],
                            [
                                'name' => 'Benoni',
                            ],
                            [
                                'name' => 'Pretoria',
                            ],
                            [
                                'name' => 'Vereeniging',
                            ],
                            [
                                'name' => 'Springs',
                            ],
                        ],
                    ],
                    [
                        'name' => 'KwaZulu-Natal',
                        'children' => [
                            [
                                'name' => 'Durban',
                            ],
                            [
                                'name' => 'Pietermaritzburg',
                            ],
                            [
                                'name' => 'Vryheid',
                            ],
                            [
                                'name' => 'Port Shepstone',
                            ],
                            [
                                'name' => 'Ladysmith',
                            ],
                            [
                                'name' => 'Ulundi',
                            ],
                            [
                                'name' => 'Ubombo',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Limpopo',
                        'children' => [
                            [
                                'name' => 'Thohoyandou',
                            ],
                            [
                                'name' => 'Polokwane',
                            ],
                            [
                                'name' => 'Tzaneen',
                            ],
                            [
                                'name' => 'Lebowakgomo',
                            ],
                            [
                                'name' => 'Messina',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Mpumalanga',
                        'children' => [
                            [
                                'name' => 'Nelspruit',
                            ],
                            [
                                'name' => 'Middelburg',
                            ],
                            [
                                'name' => 'Bethal',
                            ],
                            [
                                'name' => 'Standerton',
                            ],
                            [
                                'name' => 'Volksrust',
                            ],
                            [
                                'name' => 'Komatipoort',
                            ],
                        ],
                    ],
                    [
                        'name' => 'North West',
                        'children' => [
                            [
                                'name' => 'Klerksdorp',
                            ],
                            [
                                'name' => 'Rustenburg',
                            ],
                            [
                                'name' => 'Potchefstroom',
                            ],
                            [
                                'name' => 'Brits',
                            ],
                            [
                                'name' => 'Mmabatho',
                            ],
                            [
                                'name' => 'Vryburg',
                            ],
                            [
                                'name' => 'Bloemhof',
                            ],
                            [
                                'name' => 'Mahikeng',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Northern Cape',
                        'children' => [
                            [
                                'name' => 'Kimberley',
                            ],
                            [
                                'name' => 'Upington',
                            ],
                            [
                                'name' => 'De Aar',
                            ],
                            [
                                'name' => 'Colesburg',
                            ],
                            [
                                'name' => 'Prieska',
                            ],
                            [
                                'name' => 'Springbok',
                            ],
                            [
                                'name' => 'Kuruman',
                            ],
                            [
                                'name' => 'Carnarvon',
                            ],
                            [
                                'name' => 'Pofadder',
                            ],
                            [
                                'name' => 'Alexander Bay',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Western Cape',
                        'children' => [
                            [
                                'name' => 'Cape Twon',
                            ],
                            [
                                'name' => 'Paarl',
                            ],
                            [
                                'name' => 'George',
                            ],
                            [
                                'name' => 'Worcester',
                            ],
                            [
                                'name' => 'Oudtshoorn',
                            ],
                            [
                                'name' => 'Saldanha',
                            ],
                            [
                                'name' => 'Knysna',
                            ],
                            [
                                'name' => 'Beaufort West',
                            ],
                            [
                                'name' => 'Hermanus',
                            ],
                            [
                                'name' => 'Mossel Bay',
                            ],
                            [
                                'name' => 'Bredasdopr',
                            ],
                            [
                                'name' => 'Swellendam',
                            ],
                            [
                                'name' => 'Vanrhynsdorp',
                            ],
                        ],
                    ],
                ],
            ]
        ];
        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
