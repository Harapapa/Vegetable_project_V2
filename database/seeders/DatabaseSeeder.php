<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()
            ->updateOrCreate([
                'email' => 'aduss1700@gmail.com',
            ], [
                    'name' => 'Szitási Ádám',
                    'password' => bcrypt('password'),
                ]);

        $this->call([
            VegetableSeeder::class,
        ]);
    }
}
