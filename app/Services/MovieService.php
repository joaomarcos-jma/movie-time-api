<?php


namespace App\Services;

use App\Repositories\MovieRepository;

class MovieService extends AbstractService
{

    /**
     * @var MovieRepository
     */
    protected $repository;

    /**
     * MovieService constructor.
     * @param MovieRepository $repository
     */
    public function __construct(MovieRepository $repository)
    {
        $this->repository = $repository;
    }
}