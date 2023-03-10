<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index()
    {
        //
        $data = new AuthorCollection(Author::all());

        return response()->json($data, ResponseAlias::HTTP_OK);
    }


    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
        $data = new AuthorResource($author);

        return response()->json($data, ResponseAlias::HTTP_OK);
    }


}
