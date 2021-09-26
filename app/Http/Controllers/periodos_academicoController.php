<?php

namespace App\Http\Controllers;

use App\Models\Periodos_academico;
use Illuminate\Http\Request;

class periodos_academicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Periodos_academico::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Periodos_academico = Periodos_academico::create([
            'cedula' => $request['cedula'],
            'codigo_estudiante' => $request['codigo_estudiante'],
            'nombre1' => $request['nombre1'],
            'nombre2' => $request['nombre2'],
            'apellido1' => $request['apellido1'],
            'apellido2' => $request['apellido2'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'genero' => $request['genero'],
            'nacionalidad' => $request['nacionalidad'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
        ]);
        if(!$Periodos_academico){
            return response()->json([
                'status' => 'ERROR',
                'message' => 'El Usuario no fue creado correctamente',

            ]);
        }
        else{
            return response()->json([
                'status' => 'OK',
                'message' => 'Ususario creado correctamente',
                'registro' => $Periodos_academico
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function show(Periodos_academico $Periodos_academico)
    {

           $consulta= Periodos_academico::where('id',$Periodos_academico->id)->first();
            if($consulta){
                return response()->json($consulta);
            }else{
                return response()->json([
                    'status' => 'ERROR',
                    'message' => 'No existe el Usuario.',

                ]);

            }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodos_academico $Periodos_academico)
    {
        $consulta= Periodos_academico::where('id',$Periodos_academico->id)->first();
            if($consulta){
                return response()->json($consulta);
            }else{
                return response()->json([
                    'status' => 'ERROR',
                    'message' => 'No existe el Usuario.',

                ]);

            }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodos_academico $Periodos_academico)
    {
        if(!$Periodos_academico) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Periodos_academico.',
                'registro' => []
            ]);
        }

        $Periodos_academico->update([
            'cedula' => $request['cedula'],
            'codigo_estudiante' => $request['codigo_estudiante'],
            'nombre1' => $request['nombre1'],
            'nombre2' => $request['nombre2'],
            'apellido1' => $request['apellido1'],
            'apellido2' => $request['apellido2'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'genero' => $request['genero'],
            'nacionalidad' => $request['nacionalidad'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
        ]);
        if($Periodos_academico->save()){
            return response()->json([
                'status' => 'OK',
                'message' => 'Periodos_academico actualizado correctamente',
                'registro' => $Periodos_academico
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodos_academico $Periodos_academico)
    {
        $Periodos_academico = Periodos_academico::find($Periodos_academico);
        if ($Periodos_academico->delete()) {
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El usuario se Elimino correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El usuario NO se Elimino correctamente'
            ]);
        }
    }
}
