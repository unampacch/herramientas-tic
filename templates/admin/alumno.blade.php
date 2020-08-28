@extends('defaultAdmin')

@section('title','Buscar alumno')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <br>
            <p class="text-info">{{strftime("Consulta generada el %d/%m/%Y a las %H:%M")}}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">@isset($alumno['nombre']){{$alumno['nombre']}}@endisset @isset($alumno['apellidos']){{$alumno['apellidos']}}@endisset</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="User Pic" src="/img/user.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Numero de cuenta</td>
                                        <td>@isset($alumno['cuenta']){{$alumno['cuenta']}}@endisset</td>
                                    </tr>
                                    <tr>
                                        <td>Plantel</td>
                                        <td>@isset($alumno['plantel']){{$alumno['plantel']}}@endisset</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de nacimiento:</td>
                                        <td>@isset($alumno['fnacimiento']){{$alumno['fnacimiento']}}@endisset</td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td>Genero</td>
                                            <td>@isset($alumno['genero']){{$alumno['genero']}}@endisset</td>
                                        </tr>
                                        <tr>
                                            <td>Accesos al sistema</td>
                                            <td>@isset($alumno['ingresos']){{$alumno['ingresos'][0][0]}}@endisset</td>
                                        </tr>
                                        <tr>
                                            <td>¿Termino curso?</td>
                                            <td><strong>@isset($alumno['termino']){{$alumno['termino']}}@endisset</strong></td>
                                        </tr>
                                        <td>Secciones consultadas</td>
                                        <td>@isset($alumno['niveles'])
                                                @foreach ($alumno['niveles'] as $nivel)
                                                    {{$nivel}}<br>
                                                @endforeach
                                            @endisset
                                        </td>

                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Enviar comprobante" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <span class="pull-right">
                            <a href="/admin/backend/buscar" data-original-title="Buecar nuevo alumno" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-search" aria-hidden="true"></i> Buscar otro alumno</a>
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
