<?php

namespace App\Http\Controllers;

use App\frenemies;
use Illuminate\Http\Request;

class FrenemiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'welcome' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new frenemies();
        $new->name = $request->get('name');
        $new->meanpoints = $request->get('meanpoints');
        $new->poplevel = $request->get('poplevel');
        $new->save();

        return redirect( route( 'welcome' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\frenemies  $frenemies
     * @return \Illuminate\Http\Response
     */
    public function show(frenemies $frenemies)
    {
        return view( 'ducks', [ 'meanduck' => frenemies::all() ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\frenemies  $frenemies
     * @return \Illuminate\Http\Response
     */
    public function edit(frenemies $frenemies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\frenemies  $frenemies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frenemies $frenemies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\frenemies  $frenemies
     * @return \Illuminate\Http\Response
     */
    public function destroy(frenemies $frenemies)
    {
        //
    }
}
