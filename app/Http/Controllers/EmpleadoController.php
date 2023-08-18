<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Companie;
use App\Models\Empleado;
use App\Models\Puesto;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        return view('empleado.index');
    }

    public function create(){
        $puestos = Puesto::all();
        $companies = Companie::all();

        return view('empleado.create', compact('puestos', 'companies'));
    }

    public function store(Request $request){
        //return $request->all();
        $request->validate([
            'name' => 'required|min:3|alpha',
            'app' => 'required|min:3|alpha',
            'apm' => 'required|min:3|alpha',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'puesto' => 'required',
            'company' => 'required'
        ]);

        $empleado = new Empleado();

        $empleado->name = $request->name;
        $empleado->app = $request->app;
        $empleado->apm = $request->apm;
        $empleado->email = $request->email;
        $empleado->idcompania = $request->company;
        $empleado->idpuesto = $request->puesto;
        $empleado->status = '1';

        $empleado->save();

        return redirect()->route('empleado.detalle', $empleado->id);
    }


    public function showList(){
        $empleados = Empleado::orderBy('id','desc')->paginate();
        //return view('empleado.showList');
        return view('empleado.showList', compact('empleados'));
    }

    public function show($numempleado){
        /*return view('empleado.show', ['numero' => $numempleado]);*/
        $empleados = Empleado::find($numempleado);
        $puesto = Puesto::find($empleados->idpuesto);
        $companie = Companie::find($empleados->idcompania);

        return view('empleado.show', compact('numempleado', 'empleados', 'puesto', 'companie'));
    }

    public function edit(Empleado $numempleado){
        $empleados = Empleado::find($numempleado->id);
        $puesto = Puesto::find($empleados->idpuesto);
        $companie = Companie::find($empleados->idcompania);

        $puestos = Puesto::all();
        $companies = Companie::all();

        return view('empleado.edit', compact('numempleado', 'empleados', 'puesto', 'companie', 'puestos', 'companies'));
        //return view('empleado.edit', compact('numempleado'));
    }

    public function update(Request $request, Empleado $numempleado){
        //return $numempleado;
        //return $request->all();
        $request->validate([
            'name' => 'required|min:3|alpha',
            'app' => 'required|min:3|alpha',
            'apm' => 'required|min:3|alpha',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'puesto' => 'required',
            'company' => 'required'
        ]);

        $numempleado->name = $request->name;
        $numempleado->app = $request->app;
        $numempleado->apm = $request->apm;
        $numempleado->email = $request->email;
        $numempleado->idcompania = $request->company;
        $numempleado->idpuesto = $request->puesto;
        $numempleado->status = $request->status;

        $numempleado->save();

        return redirect()->route('empleado.detalle', $numempleado->id);
    }

    public function delete($numempleado){
        return view('empleado.delete', compact('numempleado'));
    }
}
