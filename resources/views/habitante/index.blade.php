@extends('layout.plantilla')
 @section('contenido')
<div class="row">
 <div class="col-md-8 col-xs-12">
 @include('habitante.search')
 </div>
 <div class="col-md-2">
 <a href="habitante/create" class="pull-right">
 <button class="btn btn-success">Crear habitante</button>
 </a>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12 col-xs-12">
 <div class="table-responsive">
 <table class="table table-striped table-hover">
 <thead>
 <th>Id</th>
 <th>Documento Identidad</th>
 <th>Primer Nombre</th>
 <th>Segundo Nombre</th>
 <th>Primer Apellido</th>
 <th>Segundo Apellido</th>
 <th>Telefono</th>
 <th>Correo</th>
 <th>Fecha Registro</th>
 <th width="180">Opciones</th>
 </thead>
 <tbody>
 @foreach($habitantes as $habitante)
 <tr>
 <td>{{ $habitante->id }}</td>
 <td>{{ $habitante->documentoidentidad }}</td>
 <td>{{ $habitante->primer_nombre }}</td>
 <td>{{ $habitante->segundo_nombre}}</td>
 <td>{{ $habitante->primer_apellido }}</td>
 <td>{{ $habitante->segundo_apellido }}</td>
 <td>{{ $habitante->telefono }}</td>
 <td>{{ $habitante->correo }}</td>
 <td>{{ $habitante->fecha }}</td>
 <td>
<a href="{{URL::action('HabitanteController@edit',$habitante->id)}}"><button class="btn btn-primary">Actualizar</button></a>

<a href="" data-target="#modal-delete-{{$habitante->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>



 </a>
 </td>
 </tr>
 @include('habitante.modal')
 @endforeach
 </tbody>
 </table>
 </div>
 {{$habitantes->links()}}
 </div>
 </div>
 @endsection
