<?php

namespace App\Repositories;

use App\Movie;
use Prettus\Repository\Eloquent\BaseRepository;

class MovieRepository extends BaseRepository
{

    public $relationships = [];

    protected $fieldSearchable = [
        'title' => 'ilike',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Movie::class;
    }
}
