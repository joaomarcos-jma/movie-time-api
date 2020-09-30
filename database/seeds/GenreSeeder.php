<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            [
                'name' => 'Ação',
            ],
            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Aventura',
            ],
            [
                'name' => 'Terror',
            ],
        ];

        foreach ($genre as $item) {
            Genre::create($item);
        }
    }
}
