<?php

namespace App\Http\Controllers;

use App\Acte;
use Illuminate\Http\Request;
use App\Http\Resources\ActeResource;

class ActeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actes = Acte::all();
        return ActeResource::collection($actes);
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acte = new Acte();

        $acte->name = $request->label;

        $acte->save();

        return new ActeResource($acte);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function show(Acte $acte)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acte $acte)
    {

        $acte->name = $request->label;
        $acte->save();
        return new ActeResource($acte);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acte $acte)
    {
        $acte->delete();
        return [];
    }
}
