@extends('defaultAdmin')

@section('title','Estadísticas de Herramientas TIC')

@section('content')

<!-- Right -->
<a href="#"><strong><span class="fa fa-dashboard"></span> Estadísticas</strong></a>
<hr>
<div class="well">
    <div class="row">
        <div class="col-md-12 ">
            <h2>Porcentaje de alumnos que han culminado el curso</h2>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Todos los planteles: {{$valores['avancesTotal_num']}}</div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avancesTotal']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avancesTotal']}}%">
                            {{$valores['avancesTotal']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Vallejo: {{$valores['avances_num']['Vallejo']}} </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avances']['Vallejo']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avances']['Vallejo']}}%">
                            {{$valores['avances']['Vallejo']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Oriente  {{$valores['avances_num']['Oriente']}}</div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avances']['Oriente']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avances']['Oriente']}}%">
                            {{$valores['avances']['Oriente']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Naucalpan: {{$valores['avances_num']['Naucalpan']}}</div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avances']['Naucalpan']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avances']['Naucalpan']}}%">
                            {{$valores['avances']['Naucalpan']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Azcapotzalco: {{$valores['avances_num']['Azcapotzalco']}}</div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avances']['Azcapotzalco']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avances']['Azcapotzalco']}}%">
                            {{$valores['avances']['Azcapotzalco']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Sur: {{$valores['avances_num']['Sur']}}</div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$valores['avances']['Sur']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$valores['avances']['Sur']}}%">
                            {{$valores['avances']['Sur']}}% Completado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <!--<div class="panel panel-default">
            <div class="panel-heading">Avances de los alumnos en el curso</div>
            <div class="panel-body">
                <canvas id="myChart" width="200" height="200"></canvas>
            </div>
        </div>-->
        <div class="panel panel-default">
            <div class="panel-heading">Puntuacion del Cuestionario (1 al 5)</div>
            <div class="panel-body">

                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P1']}}</span>
                        El recurso te permitió conocer herramientas nuevas para ti<br>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P2']}}</span>
                        Fue claro el procedimiento para que obtuvieras tu correo institucional
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P3']}}</span>
                        Identificaste los beneficios de tu correo institucional
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P4']}}</span>
                        Aprendiste a realizar búsquedas confiables en Internet
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P5']}}</span>
                        Sabes cómo compartir información desde tu correo institucional
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P6']}}</span>
                        Las actividades te ayudaron a reforzar lo aprendido
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P7']}}</span>
                        El diseño gráfico del recurso es agradable y facilita su uso
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P8']}}</span>
                        Recomendarías este recurso
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$valores['cuestionario'][0]['P9']}}</span>
                        ¿Qué nivel crees que te aportó información nueva?
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Alumnos que iniciarion el curso</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{$valores['inicioTotal']}}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>Vallejo</th>
                            <td>{{$valores['inicio']['Vallejo']}}</td>
                        </tr>
                        <tr>
                            <th>Oriente</th>
                            <td>{{$valores['inicio']['Oriente']}}</td>
                        </tr>
                        <tr>
                            <th>Naucalpan</th>
                            <td>{{$valores['inicio']['Naucalpan']}}</td>
                        </tr>
                        <tr>
                            <th>Azcapotzalco</th>
                            <td>{{$valores['inicio']['Azcapotzalco']}}</td>
                        </tr>
                        <tr>
                            <th>Sur</th>
                            <td>{{$valores['inicio']['Sur']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Alumnos registrados en el sistema</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{$valores['total']}}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>Vallejo</th>
                            <td>{{$valores['Vallejo']}}</td>
                        </tr>
                        <tr>
                            <th>Oriente</th>
                            <td>{{$valores['Oriente']}}</td>
                        </tr>
                        <tr>
                            <th>Naucalpan</th>
                            <td>{{$valores['Naucalpan']}}</td>
                        </tr>
                        <tr>
                            <th>Azcapotzalco</th>
                            <td>{{$valores['Azcapotzalco']}}</td>
                        </tr>
                        <tr>
                            <th>Sur</th>
                            <td>{{$valores['Sur']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        ...
    </div>
</div>
@endsection


        @section('scripts')
            <script type="text/javascript">
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["0%", "25%", "50%", "75%", "100%"],
                        datasets: [{
                            label: '# de alumnos',
                            data: [12, 15, 3, 5, 9],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',

                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }],
                            xAxes: [{
                                barPercentage: 0.5,
                                categorySpacing: 0
                            }]
                        },
                        barThickness:10
                    }
                });
            </script>
        @endsection
