<?php

namespace App\Http\Controllers;

use App\Residence;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residences=Residence::paginate();
        return view('residences.index', compact('residences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $residence=Residence::create($request->all());
        return redirect()->route('residences.edit',$residence->id)
        ->with('info','Residencia Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show(Residence $residence)
    {
        return view('residences.show',compact('residence'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit(Residence $residence)
    {
        return view('residences.edit',compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residence $residence)
    {
        $residence->update($request->all());
        return redirect()->route('residences.edit',$residence->id)
        ->with('info','Residencia Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residence $residence)
    {
        $residence->delete();
        return back()->with('info','Residencia eliminada con exito');
    }
}
