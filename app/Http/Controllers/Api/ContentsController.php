<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Contents\CreateContentRequest;
use App\Http\Requests\Contents\UpdateContentRequest;
use App\Services\ContentsService;

class ContentsController extends Controller
{
    public function __construct(
        private readonly ContentsService $contentsService
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResponse
    {
        $result = $this->contentsService->getUnpaginated();

        return response()->json(
            $result,
            Response::HTTP_OK
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateContentRequest $request) : JsonResponse
    {
        $result = $this->contentsService->create($request->validated());

        return response()->json(
            $result,
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResponse
    {
        $result = $this->contentsService->getById($id);

        return response()->json(
            $result,
            Response::HTTP_OK
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContentRequest $request, string $id) : JsonResponse
    {
        $result = $this->contentsService->updateById($id, $request->validated());

        return response()->json(
            $result,
            Response::HTTP_OK
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : JsonResponse
    {
        $result = $this->contentsService->deleteById($id);

        return response()->json(
            $result,
            Response::HTTP_NO_CONTENT
        );
    }
}
