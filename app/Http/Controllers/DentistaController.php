<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dentistas = Dentista::get();
        return view('dentistas.dentista-index2', compact('dentistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dentistas.dentista-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dentista::create($request->all());
        return redirect('/dentista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function show(Dentista $dentistum)
    {
        return view('dentistas.dentista-show', compact('dentistum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function edit(Dentista $dentistum)
    {
        return view('dentistas.dentista-form', compact('dentistum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dentista $dentistum)
    {
        Dentista::where('id', $dentistum->id)->update($request->except('_token', '_method'));
        return redirect()->route('dentista.show', $dentistum); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dentista $dentistum)
    {
        $dentistum->delete();
        return redirect()->route('dentista.index');
    }
}
