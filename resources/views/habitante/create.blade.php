@extends('layout.plantilla')
 @section('contenido')
  <div class="row">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h3>Nuevo Habitante</h3>.
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
              {!!Form::open(array('url'=>'habitante','method'=>'POST','autocomplete'=>'off'))!!}
               {{Form::token()}}
               <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group">
                 <br><label for="documento">Numero Documento del Habitante</label>
 <input type="number" name="documento" id="documento" class="form-control" placeholder= "Digite el número Documento"> 
 </div>
  </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
     <br>
      <label for="pnombre">Primer Nombre</label>
       <input type="text" name="pnombre" id="pnombre" class="form-control" placeholder="Primer nombre">
        </div>
         </div>

         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br><label for="snombre">Segundo Nombre</label> <input type="text" name="snombre" id="snombre" class="form-control" placeholder="segundo nombre"> 
 </div> 
 </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br> <label for="papellido">Primer Apellido</label> <input type="text" name="papellido" id="papellido" class="form-control" placeholder="Primer apellido">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br> <label for="sapellido">Segundo Apellido</label> <input type="text" name="sapellido" id="sapellido" class="form-control" placeholder="segundo apellido">
 </div> 
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br> <label for="email">Telefono</label> <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br> <label for="correo">Correo</label> <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
 <br> <label for="fecha">Fecha Regitro</label> <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group"> <br> <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> 
 Guardar</button>
 <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> 
 Vaciar Campos</button>
 <a class="btn btn-info" type="reset" href="{{url('habitante')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div> 
 </div>

 {!!Form::close()!!} 
 @endsection
