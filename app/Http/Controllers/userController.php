<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(user::all());
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
        $user = User::create([
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
        if(!$user){
            return response()->json([
                'status' => 'ERROR',
                'message' => 'El Usuario no fue creado correctamente',

            ]);
        }
        else{
            return response()->json([
                'status' => 'OK',
                'message' => 'Ususario creado correctamente',
                'registro' => $user
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {

           $consulta= user::where('id',$user->id)->first();
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
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $consulta= user::where('id',$user->id)->first();
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
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        if(!$user) {
            return response()->json([
                'status' => 'OK',
                'message' => 'No existe el User.',
                'registro' => []
            ]);
        }

        $user->update([
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
        if($user->save()){
            return response()->json([
                'status' => 'OK',
                'message' => 'User actualizado correctamente',
                'registro' => $user
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user = User::find($user);
        if ($user->delete()) {
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
