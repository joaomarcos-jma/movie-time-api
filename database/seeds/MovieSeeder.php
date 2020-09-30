<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $movie = [
            [
                'title' => 'Startrek',
                'overview' => "Aboard the USS Enterprise, the most sophisticated starship ever constructed, a novice crew embarks on its maiden voyage.",
                'runtime' => 139,
                'streaming' => $faker->randomElement(Movie::STREAMING),
                'logo_path' => 'https://miro.medium.com/max/777/1*48zbJ4CsrSXVW_EXlPobvA.jpeg',
                'genre_id' => Genre::all()->random()->id
            ],
            [
                'title' => 'Avengers - Infinity War',
                'overview' => "In the film, the Avengers and the Guardians of the Galaxy attempt to prevent Thanos from collecting the six all-powerful Infinity Stones as part of his quest to kill half of all life in the universe",
                'runtime' => 250,
                'streaming' => $faker->randomElement(Movie::STREAMING),
                'logo_path' => 'https://www.vamosfalardecinema.com.br/wp-content/uploads/2018/04/bab.png',
                'genre_id' => Genre::all()->random()->id
            ],
        ];

        foreach ($movie as $item) {
            Movie::create($item);
        }
    }
}
