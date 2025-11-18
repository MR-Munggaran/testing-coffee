<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffees = [
            [
                'bean' => 'Cubita',
                'description' => 'Cubita coffee is sun dried and hand sorted. It originates from an elevation of over 2000 meters in the Andes Mountains of Ecuador, which is located closest to the sun on the Equator. Superb aroma and rich Flavor.',
                'price' => 12.00,
            ],
            [
                'bean' => 'Colombian Supremo',
                'description' => 'This smooth, full-flavored coffee from Colombia boasts a sweet delicate aroma and a rich, balanced flavor. A classic coffee appropriate for any occasion.',
                'price' => 13.50,
            ],
            [
                'bean' => 'Pure Kona Fancy',
                'description' => 'Grown on the Big Island of Hawaii, this coffee is known for its tantalizing aroma. This medium bodied brew offers a rich flavor with subtle winery tones.',
                'price' => 15.90,
            ],
            [
                'bean' => 'Kenyan',
                'description' => 'The complex coffee from the highlands of East Africa features a winey, full flavor coupled with an intriguing aroma. A delightfully delicate selection for coffee lovers.',
                'price' => 24.00,
            ],
            [
                'bean' => 'Costa Rican',
                'description' => 'Arabicas normally set aside for the demanding Northern European market produce this lively, well-balanced coffee distinguished by its snappy, clean taste.',
                'price' => 12.30,
            ],
            [
                'bean' => 'Kona Peaberry',
                'description' => 'Occasionally coffee fruit produces a single, rather than a double, bean. These "peaberries" provide all the flavor and aroma of their larger, regular cousins, but in a smaller package.',
                'price' => 10.00,
            ],
            [
                'bean' => 'Sumatra',
                'description' => 'The wonderful cocoa-like finish of this smooth, full-bodied coffee is reminiscent of rich, dark chocolate. Its unique characteristics can only be captured from the rich soils of this isle of Indonesia.',
                'price' => 9.50,
            ],
        ];

        DB::table('beans')->insert($coffees);
    }
}