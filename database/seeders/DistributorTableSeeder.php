<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distributors = [
            [
                'distributor_name' => 'Beans R Us',
                'city' => 'Brisbane',
            ],
            [
                'distributor_name' => 'The Buzz',
                'city' => 'Munich',
            ],
            [
                'distributor_name' => 'Coffee Galore',
                'city' => 'Capelle aan den IJssel',
            ],
            [
                'distributor_name' => 'Perk Plus',
                'city' => 'Salem',
            ],
            [
                'distributor_name' => 'Café Colombian',
                'city' => 'Hawthorne',
            ],
        ];

        DB::table('distributors')->insert($distributors);
    }
}