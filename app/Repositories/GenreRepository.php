<?php

namespace App\Repositories;

use App\Genre;
use Prettus\Repository\Eloquent\BaseRepository;

class GenreRepository extends BaseRepository
{

    public $relationships = [];

    protected $fieldSearchable = [
        'name' => 'ilike',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Genre::class;
    }
}
