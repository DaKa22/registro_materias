@extends('layouts.app')
@section('titulo') Matricula Materias @endsection

@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Matricula de Materias</h4>

                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-light btn-rounded" type="button" data-toggle="modal" data-target="#modal_crearMatricula_materia">
                            <i class="mdi mdi-plus mr-1"></i> Agregar
                        </button>
                        <a href="{{route('imprimir.matriculas')}}">
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
                        <h4 class="header-title">Reporte de Matricula de Materias</h4>

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
                                        <th>Datos Basicos ID</th>
                                        <th>Periodo Academicos ID</th>
                                        <th>Materias ID</th>
                                        <th>Configuracion</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matricula_materias as $matricula_materia)
                                        <tr>
                                            <th scope="row">{{ $matricula_materia->id }}</th>

                                            <td>{{ $matricula_materia->users_id }}</td>
                                            <td>{{ $matricula_materia->periodos_academicos_id }}</td>
                                            <td>{{ $matricula_materia->materias_id }}</td>

                                            <td>
                                                <button class="btn btn-danger" onclick="deleteMatricula_materia({{ $matricula_materia->id }})"><i class="fa fa-trash"></i></button>
                                                <button class="btn btn-info" onclick="updateMatricula_materia({{ $matricula_materia->id }})"><i class="fa fa-edit"></i></button>

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
<div class="modal fade bs-example-modal-center" id="modal_crearMatricula_materia" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="titulo" >Agregar Matricula de Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-group" method="POST" action="">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="users_id">Datos Basicos ID</label>
                            <input type="number" class="form-control" id="users_id" name="users_id" placeholder="Escriba El Dato Basico ID" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="periodos_academicos_id">Periodos Academicos ID</label>
                            <input type="number" class="form-control" id="periodos_academicos_id" name="periodos_academicos_id" placeholder="Escriba El Periodo Academico ID" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="materias_id">Materia ID</label>
                            <input type="number" class="form-control" id="materias_id" name="materias_id" placeholder="Escriba La Materia ID" required>
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
