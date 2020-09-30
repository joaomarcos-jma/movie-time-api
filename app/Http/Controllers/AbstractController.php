<?php


namespace App\Http\Controllers;

use Illuminate\Http\Response;

abstract class AbstractController extends Controller
{
    /**
     * @var $service
     */
    protected $service;
    protected $model;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        return Response::custom('list', $this->service->all(), \Illuminate\Http\Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show($id)
    {
        $data = $this->service->find($id);
        return Response::custom('detail', $data, \Illuminate\Http\Response::HTTP_OK);
    }

    /**
     * Store.
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function save($request)
    {
        $data = $this->service->create($request);
        return Response::custom('created', $data, \Illuminate\Http\Response::HTTP_CREATED);
    }

    /**
     * Store.
     *
     * @param $request
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateAs($request, $id)
    {
        $this->authorize('update', $this->model);
        $data = $this->service->update($request, $id);
        return Response::custom('updated', $data, \Illuminate\Http\Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $this->authorize('destroy', $this->model);
        $data = $this->service->destroy($id);
        return Response::custom('deleted', $data, \Illuminate\Http\Response::HTTP_OK);
    }
}
