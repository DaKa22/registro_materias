<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias=Materia::all();
        return view('materias.index', ['materias' => $materias]);
    }
    public function imprimir()
    {
        $materias=materia::all();
        $pdf= \PDF::loadView('materias.imprimir',compact('materias'));
        return $pdf->download('materias.pdf');
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
            $Materia=Materia::where('id',$request->id)->first();
        if(!$Materia) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Materia.',
                'registro' => []
            ]);
        }

        $Materia->update([
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
        if($Materia->save()){
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
        $Materia = Materia::create([
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
        if($Materia){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'La Materia se Creo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'La Materia NO se Creo correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

           $consulta= Materia::where('id',$id)->first();
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
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta= Materia::where('id',$id)->first();
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
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Materia=Materia::where('id',$id)->first();
        if(!$Materia) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Materia.',
                'registro' => []
            ]);
        }

        $Materia->update([
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
        if($Materia->save()){
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
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Materia = Materia::where('id',$id)->first();

        if ($Materia->delete()) {

            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'La Materia se Elimino correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'La Materia NO se Elimino correctamente'
            ]);
        }
    }
}
