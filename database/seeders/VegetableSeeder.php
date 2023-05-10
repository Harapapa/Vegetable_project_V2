<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Product::query()
            ->create([
                'product_id' => 1,
                'name' => 'Paradicsom',
                'Price' => '2000ft/kg',
            ])
            ->create([
                'product_id' => 2,
                'name' => 'Paprika',
                'Price' => '2500ft/kg',
            ])
            ->create([
                'product_id' => 3,
                'name' => 'Uborka',
                'Price' => '1800ft/kg',
            ])
            ->create([
                'product_id' => 4,
                'name' => 'Répa',
                'Price' => '900ft/kg',
            ])
            ->create([
                'product_id' => 5,
                'name' => 'Petrezselyem',
                'Price' => '1900ft/kg',
            ])
            ->create([
                'product_id' => 6,
                'name' => 'Zeller',
                'Price' => '800ft/kg',
            ]);
    }
}