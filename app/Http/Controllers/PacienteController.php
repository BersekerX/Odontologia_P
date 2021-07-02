<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Factura;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PacienteController extends Controller
{

    private $validacion;
    private $validacionF;
    public function __construct(){
        $this->validacion = [
            'nombre' => ['required', 'string', 'min:3','max:255'],
            'apellidos' => ['required', 'string', 'min:3', 'max:255'],
            'fechaNacimiento' => ['required', 'date'],
            'telefono' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'min:5'],
        ];

        $this->validacionF = [
            'fecha' => ['required', 'date'],
            'noTratamiento' => ['required', 'string', 'min:1'],
            'metodoPago' => ['required', 'string'],
            'abono' => ['required', 'int', 'min:1'],
            'pacienteId' => ['required'],
        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::get();
        return view('pacientes.paciente-index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.paciente-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar campos
        $request->validate($this->validacion);

        $paciente = new Paciente($request->all()); 
        $paciente->save();

        // Paciente::create($request->all());
        return redirect('/paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        $tratamientos = Tratamiento::get();
        return view('pacientes.paciente-show', compact('paciente', 'tratamientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.paciente-form', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate($this->validacion);

        Paciente::where('id', $paciente->id)->update($request->except('_token', '_method'));
        return redirect()->route('paciente.show', $paciente); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        Gate::authorize('admin');
        //Solo Administradores pueden eliminar pacientes
        // $this->authorize('delete');


        $paciente->delete();
        return redirect()->route('paciente.index'); 
    }

    /**
     * Asigna un Tratamiento a Paciente
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function asignaTratamiento(Request $request, Paciente $paciente)
    {
        // dd($request->all(), $paciente);
        $paciente->tratamientos()->sync($request->tratamiento_id);
        return redirect()->route('paciente.show', $paciente);
    }

    public function asignaFactura(Request $request, Paciente $paciente)
    {
        //  dd($request->all(), $paciente);
        // $request->validate($this->validacionF);

        // $factura = new Factura($request->all()); 
        // $paciente = Paciente::find($paciente);
        // $paciente->facturas()->save($factura);

        // return redirect()->route('paciente.show');
    }
}
