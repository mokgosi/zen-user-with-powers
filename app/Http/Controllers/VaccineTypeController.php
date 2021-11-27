<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVaccineTypeRequest;
use App\Http\Requests\UpdateVaccineTypeRequest;
use App\Models\VaccineType;

class VaccineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccineTypes = VaccineType::latest()->paginate(10);
        return view('vaccine.types.index', compact('vaccineTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVaccineTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVaccineTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaccineType  $vaccineType
     * @return \Illuminate\Http\Response
     */
    public function show(VaccineType $vaccineType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaccineType  $vaccineType
     * @return \Illuminate\Http\Response
     */
    public function edit(VaccineType $vaccineType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVaccineTypeRequest  $request
     * @param  \App\Models\VaccineType  $vaccineType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVaccineTypeRequest $request, VaccineType $vaccineType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaccineType  $vaccineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaccineType $vaccineType)
    {
        //
    }
}
