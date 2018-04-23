<?php

namespace App\Http\Controllers;

use App\safari;
use Illuminate\Http\Request;

class SafariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $s = new safari();
        $s->name = $request->name;
        $s->lastname = $request->lastname;
        $s->save();
        return $s;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\safari  $safari
     * @return \Illuminate\Http\Response
     */
    public function show(safari $safari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\safari  $safari
     * @return \Illuminate\Http\Response
     */
    public function edit(safari $safari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\safari  $safari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, safari $safari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\safari  $safari
     * @return \Illuminate\Http\Response
     */
    public function destroy(safari $safari)
    {
        //
    }
}
