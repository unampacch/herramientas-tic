@extends('defaultAdmin')

@section('title','Buscar alumno')

@section('content')
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Buscar Alumno</h2>
            </div>
            <div class="panel-body">
                <form action="/admin/backend/buscar" method="get">
                    <div class="input-group">
                        <input name="cuenta" type="text" class="form-control" placeholder="Numero de cuenta">
                        <div class="input-group-btn">
                            <button type "submit" class="btn btn-default">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
