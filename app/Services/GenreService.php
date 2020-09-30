<?php


namespace App\Services;

use App\Repositories\GenreRepository;

class GenreService extends AbstractService
{

    /**
     * @var GenreRepository
     */
    protected $repository;

    /**
     * GenreService constructor.
     * @param GenreRepository $repository
     */
    public function __construct(GenreRepository $repository)
    {
        $this->repository = $repository;
    }
}