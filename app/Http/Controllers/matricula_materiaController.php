<?php

namespace App\Http\Controllers;

use App\Models\Matricula_materia;
use Illuminate\Http\Request;

class matricula_materiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Matricula_materia::all());
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
        $Matricula_materia = Matricula_materia::create([
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
        if(!$Matricula_materia){
            return response()->json([
                'status' => 'ERROR',
                'message' => 'El Usuario no fue creado correctamente',

            ]);
        }
        else{
            return response()->json([
                'status' => 'OK',
                'message' => 'Ususario creado correctamente',
                'registro' => $Matricula_materia
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula_materia $Matricula_materia)
    {

           $consulta= Matricula_materia::where('id',$Matricula_materia->id)->first();
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
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula_materia $Matricula_materia)
    {
        $consulta= Matricula_materia::where('id',$Matricula_materia->id)->first();
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
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula_materia $Matricula_materia)
    {
        if(!$Matricula_materia) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Matricula_materia.',
                'registro' => []
            ]);
        }

        $Matricula_materia->update([
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
        if($Matricula_materia->save()){
            return response()->json([
                'status' => 'OK',
                'message' => 'Matricula_materia actualizado correctamente',
                'registro' => $Matricula_materia
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula_materia $Matricula_materia)
    {
        $Matricula_materia = Matricula_materia::find($Matricula_materia);
        if ($Matricula_materia->delete()) {
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
