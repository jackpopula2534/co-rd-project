<?php

namespace App\Http\Controllers;

use App\Models\RawMaterials;
use Illuminate\Http\Request;

class RawMaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve raw materials based on 'type' parameter (if present)
        $type = $request->get('type');

        // Pass the raw materials and additional data to the view
        return view('functions.raw-materials.index', [
            'type' => $type
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RawMaterials $rawMaterials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawMaterials $rawMaterials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RawMaterials $rawMaterials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawMaterials $rawMaterials)
    {
        //
    }
}
