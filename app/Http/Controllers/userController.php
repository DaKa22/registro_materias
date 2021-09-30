<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;

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
        $users=user::all();
        return view('users.index', ['users' => $users]);
    }
    public function imprimir()
    {
        $users=user::all();
        $pdf= \PDF::loadView('users.imprimir',compact('users'));
        $pdf->setPaper('A4', 'landscape');

        return $pdf->download('users.pdf');
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
            $user=user::where('id',$request->id)->first();
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
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El usuario se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El usuario NO se Actualizo correctamente'
            ]);
        }
        }
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
        if($user){
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El usuario se Creo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El usuario NO se Creo correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

           $consulta= user::where('id',$id)->first();
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
    public function edit($id)
    {
        $consulta= user::where('id',$id)->first();
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
    public function update(Request $request, $id)
    {
        $user=user::where('id',$id)->first();
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
            return redirect()->back()->with([

                'created' => 1,
                'mensaje' => 'El usuario se Actualizo correctamente'
            ]);
        } else {
            return redirect()->back()->with([
                'created' => 0,
                'mensaje' => 'El usuario NO se Actualizo correctamente'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=user::where('id',$id)->first();

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
