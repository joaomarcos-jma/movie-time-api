<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Genre;
use App\Services\GenreService;
use Exception;
use Illuminate\Http\JsonResponse;

class GenreController extends AbstractController
{
    /**
     * GenreController constructor.
     * @param GenreService $service
     */
    public function __construct(GenreService $service)
    {
        $this->service = $service;
        $this->model = Genre::class;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parent::index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GenreRequest $request
     * @return JsonResponse
     */
    public function store(GenreRequest $request)
    {
        return parent::save($request);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return JsonResponse
     * @throws Exception
     */
    public function show($id)
    {
        return parent::show($id);
    }

    /**
     * @param GenreRequest $request
     * @param $id
     * @return mixed
     * @throws AuthorizationException
     */
    public function update(GenreRequest $request, $id)
    {
        return parent::updateAs($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy($id)
    {
        return parent::destroy($id);
    }
}
