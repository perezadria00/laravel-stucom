<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        
        $jsonFile = base_path('storage\app\public\films.json');

        
        $films = json_decode(file_get_contents($jsonFile), true);

        // Insertar los datos en la tabla 'films'
        foreach ($films as $film) {
            DB::table('films')->insert([
                'name' => $film['name'],
                'year' => $film['year'],
                'genre' => $film['genre'],
                'country' => $film['country'],
                'duration' => $film['duration (minutes)'],
                'img_url' => $film['img_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

