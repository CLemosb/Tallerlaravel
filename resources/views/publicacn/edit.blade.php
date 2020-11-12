@extends('layout.plantilla')
 @section ('contenido')
 <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Publicaciones</h3>
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

 {{Form::open(array('action'=>array('PublicacionController@update', $publicacn->id),'method'=>'patch'))}}
 
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br />
            <label for="titulo">Publicaciones del Habitante</label>
            <input type="text" name="titulo" id="titulo" class="form-control"  value="{{$publicacn->titulo}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br />
            <label for="cuerpo">Digite el detalle de la reunion</label>
            <input type="text" name="cuerpo" id="cuerpo" class="form-control"   value="{{$publicacn->cuerpo}}">
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
                        <label for="Role">Correo</label>
                        <select type="email"name="habitantes_id" id="habitantes_id" class="form-control selectpicker" required>
                                <option value="" disabled selected>Correo:</option>
                        @foreach($habitantes as $hb)
                                <option value="{{$hb->id}}">{{ $hb->correo }}</option> 
                        @endforeach
                </select>
        </div>
    </div>  

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <br>
        <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
        <a class="btn btn-info" type="reset" href="{{url('publicacn')}}">
            <span class="glyphicon glyphicon-home"></span> Regresar </a>
    </div>
 </div>
 
 {!!Form::close()!!}
 @endsection
