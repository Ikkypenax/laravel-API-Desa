<?php

namespace App\Http\Controllers\Api;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desa = new Desa();
        $dataDesa = $desa->getDesaFromApi();

        return response()->json($dataDesa);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateUrl($request);
        
        $validator = Validator::make($request->all(), [
            'nama_desa' => 'required|string',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $desa = Desa::create($request->all());
        return response()->json($desa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $desa = Desa::findOrFail($id);
        return response()->json($desa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateUrl($request);

        $validator = Validator::make($request->all(), [
            'nama_desa' => 'required|string',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $desa = Desa::findOrFail($id);
        $desa->update($request->all());
        return response()->json($desa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $this->validateUrl($request);

        $desa = Desa::findOrFail($id);
        $desa->delete();
        return response()->json(null, 204);
    }

    private function validateUrl($request)
    {
        $validator = Validator::make(['url' => $request->url()], [
            'url' => 'regex:/^\/api\/desa(\/\d+)?$/',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages([
                'url' => 'URL tidak valid',
            ]);
        }
    }
}
