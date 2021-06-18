<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    private $validacion;
    public function __construct(){
        $this->validacion = [
            'nombre' => ['required', 'string', 'min:3','max:255'],
            'apellidos' => ['required', 'string', 'min:3', 'max:255'],
            'fechaNacimiento' => ['required', 'date'],
            'telefono' => ['required', 'int', 'min:10'],

            //----Domicilio----

            'noCasa' => ['required', 'int', 'min:1'],
            'calle' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],];
    }

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
        //Validando Form
        $request->validate($this->validacion);
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
        $request->validate($this->validacion);

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
