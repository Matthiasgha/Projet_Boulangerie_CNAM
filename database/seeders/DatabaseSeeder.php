<?php

namespace Database\Seeders;

use App\Models\Bread;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Bread::create([
            'name' => 'Pain Tradition',
            'price' => 2.50,
            'description' => 'Un pain à la croûte dorée et croustillante, parfait pour accompagner vos repas.',
            'image' => '/images/breads/pain-tradition.jpg', // Chemin relatif dans public
        ]);

        Bread::create([
            'name' => 'Baguette Parisienne',
            'price' => 1.20,
            'description' => 'La baguette classique, légère et savoureuse.',
            'image' => '/images/breads/baguette-parisienne.jpg',
        ]);

        Bread::create([
            'name' => 'Pain Complet',
            'price' => 3.00,
            'description' => 'Un pain riche en fibres, idéal pour une alimentation équilibrée.',
            'image' => '/images/breads/pain-complet.jpg',
        ]);
    }
}
