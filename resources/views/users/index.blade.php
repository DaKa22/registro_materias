@extends('layouts.app')
@section('titulo') Datos Basicos @endsection

@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Datos Basicos</h4>

                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-light btn-rounded" type="button" data-toggle="modal" data-target="#modal_crearUser">
                            <i class="mdi mdi-plus mr-1"></i> Agregar
                        </button>
                        <a href="{{route('imprimir.user')}}">
                            <button class="btn btn-light btn-rounded" type="button" >
                                <i class="mdi mdi-plus mr-1"></i> PDF
                            </button>
                        </a>
                    </div>



                </div>
            </div>

        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Reporte de Datos Basicos</h4>

                        @if (session()->has('created') && session()->has('mensaje'))
                            <div class="alert {{ session('created') == 1 ? 'alert-success' : 'alert-danger' }} mb-2" role="alert">
                                {{ session('mensaje') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0" id="linea">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Cedula</th>
                                        <th>Codigo de Estudiante</th>
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Genero</th>
                                        <th>Nacionalidad</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Configuracion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>

                                            <td>{{ $user->cedula }}</td>
                                            <td>{{ $user->codigo_estudiante }}</td>
                                            <td>{{ $user->nombre1 }}</td>
                                            <td>{{ $user->nombre2 }}</td>
                                            <td>{{ $user->apellido1 }}</td>
                                            <td>{{ $user->apellido2 }}</td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->genero == 0)
                                                    Mujer
                                                @else
                                                Hombre
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user->nacionalidad == 0)
                                                    Colombiano
                                                @else
                                                Extranjero
                                                @endif
                                            </td>
                                            <td>{{ $user->fecha_nacimiento }}</td>

                                            <td>
                                                <button class="btn btn-danger" onclick="deleteUser({{ $user->id }})"><i class="fa fa-trash"></i></button>
                                                <button class="btn btn-info" onclick="updateUser({{ $user->id }})"><i class="fa fa-edit"></i></button>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- end container-fluid -->
</div>
<!-- end page-content-wrapper -->

{{-- Modal para crear Lineas o editarlos --}}
<div class="modal fade bs-example-modal-center" id="modal_crearUser" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="titulo" >Agregar Datos Basicos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-group" method="POST" action="">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="cedula">Cedula</label>
                            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Escriba La Cedula" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="codigo_estudiante">Codigo Estudiante</label>
                            <input type="number" class="form-control" id="codigo_estudiante" name="codigo_estudiante" placeholder="Escriba El Codigo Estudiante" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nombre1">Primer Nombre</label>
                            <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Escriba El Primer Nombre" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nombre2">Segundo Nombre</label>
                            <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Escriba El Segundo Nombre" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="apellido1">Primer Apellido</label>
                            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escriba El Primer Apellido" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="apellido2">Segundo Apellido</label>
                            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escriba El Segundo Apellido" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="telefono">Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Escriba El Telefono" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Escriba El Correo Electronico" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="genero">Genero</label>
                            <select class="form-control" name="genero" id="genero" >
                                <option value="0">Mujer</option>
                                <option value="1">Hombre</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select class="form-control" name="nacionalidad" id="nacionalidad" >
                                <option value="0">Colombiano</option>
                                <option value="1">Extranjero</option>
                            </select>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                    </div>

                    <input type="hidden" id="id" name="id" value="">
                    <button class="btn btn-primary" type="submit">Enviar</button>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
