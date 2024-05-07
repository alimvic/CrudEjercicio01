<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    

       $busqueda = $request->get('busqueda');
        $empleados = Empleados::where('nombres','like','%'.$busqueda.'%')
       ->orWhere('apellidos','like','%'.$busqueda.'%')
       ->orWhere('id','like','%'.$busqueda.'%')
       ->paginate(5);





    return view ('inicio', compact('empleados', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $empleados = new Empleados();
    $empleados->nombres = $request->nombres;
    $empleados->apellidos = $request->apellidos;
    $empleados->cedula = $request->cedula;
    $empleados->provincia = $request->provincia;
    $empleados->fechanacimiento = $request->fechanacimiento;
    $empleados->correo = $request->correo;
    $empleados->observaciones = $request->observaciones;
    $empleados->fotos = $request->fotos;
    $empleados->estcivil = $request->estcivil;
    $empleados->tipsangre = $request->tipsangre;
    $empleados->fecha_ingreso = $request->fecha_ingreso;
    $empleados->cargo = $request->cargo;
    $empleados->departamento = $request->departamento;
    $empleados->provempleo = $request->provempleo;
    $empleados->sueldo = $request->sueldo;
    $empleados->jornada = $request->jornada;
    $empleados->estado = $request->estado;
    $empleados->observlab = $request->observlab;
    $empleados->save();

    return redirect()->route('empleados.index')->with("success","Agregado con exito");

    }

    /**
     * Display the specified resource.
     */
    public function show(empleados $empleados)
    {
        return view('delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(empleados $empleados)
    {
        return view ('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(empleados $empleados)
    {
        //
    }
    public function reportes(empleados $empleados)
    {
        $datos =Empleados::all();
        return view('reportes', compact('datos'));
    }
}
