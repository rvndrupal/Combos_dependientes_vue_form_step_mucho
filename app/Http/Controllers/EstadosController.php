<?php

namespace App\Http\Controllers;

use App\Estados;
use App\Colonias;
use App\Pais;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pais()
    {
        $pais=Pais::orderBy('nombre_pais','ASC')->get(['id','nombre_pais']);

        //dd($estados);
        return $pais;
    }

    public function estados(Pais $pais)
    {
        $estados=$pais->estados()->orderBy('nombre','ASC')->get(['id','nombre']);
        //dd($colonias);
        return $estados;
    }


    public function colonias(Estados $estados)
    {
        $colonias=$estados->colonias()->orderBy('nombre_col','ASC')->get(['id','nombre_col']);
        //dd($colonias);
        return $colonias;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show(Estados $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit(Estados $estados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estados $estados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estados $estados)
    {
        //
    }
}
