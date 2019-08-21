<?php

namespace App\Http\Controllers;

use App\VehiculoModel;
use Illuminate\Http\Request;
use App\PersonaModel;
use App\MarcaModel;
use Illuminate\Support\Facades\DB;


class VehiculoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function estadisticos()
    {
        $conteoDeMarcas = array();
        $marcas_lista = DB::table('marca_models')->pluck('nombre_marca');
        foreach ($marcas_lista as $marca_nombre_i) {
            $conteoDeMarcas[$marca_nombre_i] = DB::table('vehiculo_models')->where('marca', $marca_nombre_i)->count();
        }
        return view('estadisticos')->with('conteoDeMarcas', $conteoDeMarcas);
    }

    public function index()
    {
        return view('zona_inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todas_marcas = MarcaModel::all();
        return view('crear')->with('todas_marcas', $todas_marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=([
            'nombre_marca.exists' => 'La marca no es valida',
        ]);

        $request->validate([
            'nombre_marca' => 'required|exists:marca_models,nombre_marca',
        ],$message);

        $persona = new PersonaModel([
            'cedula' => $request->get('cedula'),
            'nombre_completo' => $request->get('nombre_completo'),
        ]);

        $persona->save();

        $vehiculo = new VehiculoModel([
            'placa' => $request->get('placa'),
            'marca' => $request->get('nombre_marca'),
            'duenho' => $request->get('cedula'),
        ]);

        $vehiculo->save();

        return redirect('/A765/Listar_Vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VehiculoModel  $vehiculoModel
     * @return \Illuminate\Http\Response
     */
    public function show(VehiculoModel $vehiculoModel)
    {
        $lista_vehiculos = VehiculoModel::all();
        return view('listar')->with('lista_vehiculos', $lista_vehiculos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VehiculoModel  $vehiculoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(VehiculoModel $vehiculoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VehiculoModel  $vehiculoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehiculoModel $vehiculoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VehiculoModel  $vehiculoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehiculoModel $vehiculoModel)
    {
        //
    }
}
