<?php

namespace App\Http\Controllers;

use App\Http\Resources\PertitionCollection;
use App\Http\Resources\PertitionResource;
use App\Models\Pertition;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PertitionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index()
    {
        $data = new PertitionCollection(Pertition::all());

        return response()->json($data, ResponseAlias::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pertition = Pertition::create($request->only([
            'title', 'descriptions', 'author', 'category', 'signatures'
        ]));

        return new PertitionCollection($pertition);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertition $pertition)
    {
        //

        return new PertitionResource($pertition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertition $pertition)
    {
        //

        $pertition->update($request->only([
            'title', 'description', 'category', 'author', 'signatures'
        ]));

        return new PertitionResource($pertition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertition $pertition)
    {
        //
        $pertition->delete();

        return response()->json(null, ResponseAlias::HTTP_NO_CONTENT);
    }
}
