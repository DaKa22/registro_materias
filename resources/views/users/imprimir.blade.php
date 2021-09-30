<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>DaKa | Datos Basicos

        <!-- App favicon -->



        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Icons Css -->

        <!-- App Css-->


        <!-- CSRF TOKEN-->

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">



            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

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
                </div>
                <!-- End Page-content -->



            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->

        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('assets/js/CRUD.js')}}">  </script>



    </body>
</html>








