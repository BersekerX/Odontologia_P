<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    private $validacion;
    public function __construct(){
        $this->validacion = [
            'nombreProducto' => ['required', 'string', 'min:3','max:255'],
            'fechaCaducidad' => ['required', 'date'],
            'ubicacion' => ['required', 'string', 'min:3','max:255'],
            'tipoUnidad' => ['required', 'string', 'min:3','max:255'],
            'stockActual' => ['required', 'int', 'min:1'],
            'precioNeto' => ['required', 'int', 'min:1'],
            'fecha' => ['required', 'date'],];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $inventarios = Inventario::get();
        //USANDO Eager Loading
        $inventarios = Auth::user()->inventarios()->with('user:id,name')->get();
        // dd($inventarios);

        return view('inventario.inventario-index', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.inventario-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validacion);

        $inventario = new Inventario($request->all());
        $user = Auth::user();
        $user->inventarios()->save($inventario);

        // Inventario::create($request->all());
        return redirect()->route('inventario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //
    }
}
