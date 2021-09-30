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
        $matricula_materias=matricula_materia::all();
        return view('matricula_materias.index', ['matricula_materias' => $matricula_materias]);
    }
    public function imprimir()
    {
        $matricula_materias=matricula_materia::all();
        $pdf= \PDF::loadView('matricula_materias.imprimir',compact('matricula_materias'));
        return $pdf->download('matricula_materias.pdf');
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
        if($request->id){
            $Matricula_materia=Matricula_materia::where('id',$request->id)->first();
        if(!$Matricula_materia) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Matricula_materia.',
                'registro' => []
            ]);
        }

        $Matricula_materia->update([
            'users_id' => $request['users_id'],
            'periodos_academicos_id' => $request['periodos_academicos_id'],
            'materias_id' => $request['materias_id'],

        ]);
        if($Matricula_materia->save()){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Matricula_materia se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Matricula_materia NO se Actualizo correctamente'
            ]);
        }
        }
        $Matricula_materia = Matricula_materia::create([
            'users_id' => $request['users_id'],
            'periodos_academicos_id' => $request['periodos_academicos_id'],
            'materias_id' => $request['materias_id'],
        ]);
        if($Matricula_materia){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Matricula_materia se Creo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Matricula_materia NO se Creo correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

           $consulta= Matricula_materia::where('id',$id)->first();
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
    public function edit($id)
    {
        $consulta= Matricula_materia::where('id',$id)->first();
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
    public function update(Request $request, $id)
    {
        $Matricula_materia=Matricula_materia::where('id',$id)->first();
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
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Matricula_materia se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Matricula_materia NO se Actualizo correctamente'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula_materia  $Matricula_materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Matricula_materia=Matricula_materia::where('id',$id)->first();

        if ($Matricula_materia->delete()) {
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Matricula_materia se Elimino correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Matricula_materia NO se Elimino correctamente'
            ]);
        }
    }
}
