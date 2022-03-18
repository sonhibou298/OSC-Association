<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Http\Requests\StorePaysRequest;
use App\Http\Requests\UpdatePaysRequest;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::all();
        return view('pays.index', compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pays.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaysRequest $request)
    {
        $pays = new Pays();
        $pays->nom = $request->nom;
        $pays->indicatif = $request->indicatif;
        $pays->save();
        return redirect()->route('ListePays');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(Pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaysRequest  $request
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaysRequest $request, Pays $pays)
    {
        $pays = Pays::find(1);
        $pays->nom = $request->nom;
        $pays->indicatif = $request->indicatif;
        $pays->save();
    }

//    public function delete($id)
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy($pays)
    {
        $pays = Pays::find($pays);
        $pays->delete();
        return redirect()->route('ListePays');
    }
//    {
//        $pays = Pays::find($id);
//        dd($pays);
//    }

}
