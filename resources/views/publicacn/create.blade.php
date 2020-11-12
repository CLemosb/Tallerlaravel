@extends('layout.plantilla') @section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nueva Publicacion</h3>
         @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{!!Form::open(array('url'=>'publicacn','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br />
            <label for="titulo">Publicaciones del Habitante</label>
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Digite el titulo de la publicaciones" />
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br />
            <label for="cuerpo">Digite el detalle de la reunion</label>
            <input type="text" name="cuerpo" id="cuerpo" class="form-control" placeholder="Digite el detalle de la reunion" />
        </div>
    </div>

    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
                        <label for="Role">Correo</label>
                <select type="email"name="habitantes_id" id="habitantes_id" class="form-control selectpicker" required>
                                <option value="" disabled selected>Correo:</option>
                        @foreach($publicacn as $publicacn)
                                <option value="{{$publicacn->id}}">{{ $publicacn->correo }}</option> 
                        @endforeach
                </select>
        </div>
    </div>    


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br />
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{url('publicacn')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>

    {!!Form::close()!!} @endsection
</div>

