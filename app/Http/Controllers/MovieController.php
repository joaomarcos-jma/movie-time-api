<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Movie;
use App\Services\MovieService;
use Exception;
use App\Constants\StatusCode;
use Illuminate\Http\JsonResponse;

class MovieController extends AbstractController
{
    /**
     * MovieController constructor.
     * @param MovieService $service
     */
    public function __construct(MovieService $service)
    {
        $this->service = $service;
        $this->model = Movie::class;
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
     * @param MovieRequest $request
     * @return JsonResponse
     */
    public function store(MovieRequest $request)
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
     * @param MovieRequest $request
     * @param $id
     * @return mixed
     * @throws AuthorizationException
     */
    public function update(MovieRequest $request, $id)
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
