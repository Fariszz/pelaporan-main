<?php

namespace Database\Seeders;

use App\Models\Level_menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = [
            [
                'id_level' => '1',
                'id_menu' => '1',
            ],
            [
                'id_level' => '1',
                'id_menu' => '2',
            ],
            [
                'id_level' => '1',
                'id_menu' => '3',
            ],
            [
                'id_level' => '1',
                'id_menu' => '4',
            ],
            [
                'id_level' => '1',
                'id_menu' => '5',
            ],
            [
                'id_level' => '1',
                'id_menu' => '6',
            ],
            [
                'id_level' => '1',
                'id_menu' => '7',
            ],
            [
                'id_level' => '1',
                'id_menu' => '8',
            ],
            [
                'id_level' => '1',
                'id_menu' => '9',
            ],

            // create same for level_id 2 3 4
            [
                'id_level' => '2',
                'id_menu' => '1',
            ],
            [
                'id_level' => '2',
                'id_menu' => '2',
            ],
            [
                'id_level' => '2',
                'id_menu' => '4',
            ],
            [
                'id_level' => '2',
                'id_menu' => '5',
            ],
            [
                'id_level' => '2',
                'id_menu' => '6',
            ],
            [
                'id_level' => '2',
                'id_menu' => '7',
            ],
            [
                'id_level' => '2',
                'id_menu' => '8',
            ],
            [
                'id_level' => '2',
                'id_menu' => '10',
            ],
            [
                'id_level' => '3',
                'id_menu' => '1',
            ],
            [
                'id_level' => '3',
                'id_menu' => '2',
            ],
            [
                'id_level' => '3',
                'id_menu' => '4',
            ],
            [
                'id_level' => '3',
                'id_menu' => '5',
            ],
            [
                'id_level' => '3',
                'id_menu' => '6',
            ],
            [
                'id_level' => '3',
                'id_menu' => '8',
            ],

            [
                'id_level' => '4',
                'id_menu' => '1',
            ],
            [
                'id_level' => '4',
                'id_menu' => '2',
            ],
            [
                'id_level' => '4',
                'id_menu' => '5',
            ],
            [
                'id_level' => '4',
                'id_menu' => '6',
            ],
            [
                'id_level' => '4',
                'id_menu' => '8',
            ],
            [
                'id_level' => '5',
                'id_menu' => '1',
            ],
            [
                'id_level' => '5',
                'id_menu' => '6',
            ],
            [
                'id_level' => '5',
                'id_menu' => '7',
            ],
            [
                'id_level' => '5',
                'id_menu' => '8',
            ],
            [
                'id_level' => '6',
                'id_menu' => '1',
            ],
            [
                'id_level' => '6',
                'id_menu' => '2',
            ],
            [
                'id_level' => '6',
                'id_menu' => '4',
            ],
            [
                'id_level' => '6',
                'id_menu' => '5',
            ],
            [
                'id_level' => '6',
                'id_menu' => '6',
            ],
            [
                'id_level' => '6',
                'id_menu' => '8',
            ],


        ];

        foreach ($level as $key => $value) {
            Level_menu::create($value);
        }
    }
}
