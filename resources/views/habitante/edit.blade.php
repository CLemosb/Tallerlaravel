@extends('layout.plantilla')
 @section ('contenido')
 <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar La Habitantes</h3>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
        @endif
    </div>
 </div>

 {{Form::open(array('action'=>array('HabitanteController@update', $habitantes->id),'method'=>'patch'))}}
 
 <div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="documento">Numero documento del habitante</label>
            <input type="number" name="documento" id="documento" class="form-control" value="{{$habitantes->documentoidentidad}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="pnombre">Primer Nombre</label>
            <input type="text" name="pnombre" id="pnombre" class="form-control" value="{{$habitantes->primer_nombre}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="snombre">Segundo Nombre</label>
            <input type="text" name="snombre" id="snombre" class="form-control" value="{{$habitantes->segundo_nombre}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="papellido">Primer Apellido</label>
            <input type="text" name="papellido" id="papellido" class="form-control" value="{{$habitantes->primer_apellido}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="sapellido">Segundo Apellido</label> 
            <input type="text" name="sapellido" id="sapellido" class="form-control" value="{{$habitantes->segundo_apellido}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="email">Telefono</label> 
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{$habitantes->telefono}}">
        </div>
    </div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="correo">Correo</label> 
            <input type="text" name="correo" id="correo" class="form-control" value="{{$habitantes->correo}}">
        </div>
    </div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="fecha">Fecha Registro</label> 
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{$habitantes->fecha}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <br>
        <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
        <a class="btn btn-info" type="reset" href="{{url('habitante')}}">
            <span class="glyphicon glyphicon-home"></span> Regresar </a>
    </div>
 </div>
 
 {!!Form::close()!!}
 @endsection
