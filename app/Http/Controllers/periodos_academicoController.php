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
        $periodos_academicos=periodos_academico::all();
        return view('periodos_academicos.index', ['periodos_academicos' => $periodos_academicos]);
    }
    public function imprimir()
    {
        $periodos_academicos=periodos_academico::all();
        $pdf= \PDF::loadView('periodos_academicos.imprimir',compact('periodos_academicos'));
        return $pdf->download('periodos_academicos.pdf');
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
            $Periodos_academico=Periodos_academico::where('id',$request->id)->first();
        if(!$Periodos_academico) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el Periodos_academico.',
                'registro' => []
            ]);
        }

        $Periodos_academico->update([
            'codigo' => $request['codigo'],
            'descripcion' => $request['descripcion'],

        ]);
        if($Periodos_academico->save()){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Periodos Academicos se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Periodos Academicos NO se Actualizo correctamente'
            ]);
        }
        }
        $Periodos_academico = Periodos_academico::create([
            'codigo' => $request['codigo'],
            'descripcion' => $request['descripcion'],

        ]);
        if($Periodos_academico){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Periodos Academicos se Creo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Periodos Academicos NO se Creo correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

           $consulta= Periodos_academico::where('id',$id)->first();
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
    public function edit($id)
    {
        $consulta= Periodos_academico::where('id',$id)->first();
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
    public function update(Request $request, $id)
    {
        $Periodos_academico=Periodos_academico::where('id',$id)->first();
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
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Periodos Academicos se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Periodos Academicos NO se Actualizo correctamente'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodos_academico  $Periodos_academico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Periodos_academico=Periodos_academico::where('id',$id)->first();

        if ($Periodos_academico->delete()) {
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El Periodos Academicos se Elimino correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El Periodos Academicos NO se Elimino correctamente'
            ]);
        }
    }
}
