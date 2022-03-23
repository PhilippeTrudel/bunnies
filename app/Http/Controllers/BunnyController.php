<?php

namespace App\Http\Controllers;

use App\Models\Bunny;
use Illuminate\Http\Request;

class BunnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bunny.index', Bunny::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bunny.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store the bunny

        // redirect to index view
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bunny  $bunny
     * @return \Illuminate\Http\Response
     */
    public function show(Bunny $bunny)
    {
        return view('bunny.show', $bunny);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bunny  $bunny
     * @return \Illuminate\Http\Response
     */
    public function edit(Bunny $bunny)
    {
        return view('bunny.edit', $bunny);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bunny  $bunny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bunny $bunny)
    {
        // update the bunny

        // redirect to index view
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bunny  $bunny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunny $bunny)
    {
        $bunny->delete();
    }
}
