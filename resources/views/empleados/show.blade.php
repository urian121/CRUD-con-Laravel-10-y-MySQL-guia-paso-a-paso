@extends('layouts.app')
@section('title')
    | Detalles del empleado
@endsection
@section('content')
<h1 class="text-center">
   <a class="float-start" title="Volver" href="{{ route('home') }}">
      <i class="bi bi-arrow-left-circle"></i>
   </a>
   Datos del empleado <hr>
</h1>
<ul class="list-group list-group-flush">
  <li class="list-group-item"> Nombre: &nbsp; &nbsp; <strong> {{ $empleado->nombre }}</strong></li>
  <li class="list-group-item"> Edad: &nbsp; &nbsp; <strong> {{ $empleado->edad }}</strong></li>
  <li class="list-group-item"> Cedula: &nbsp; &nbsp; <strong> {{ $empleado->cedula }}</strong></li>
  <li class="list-group-item"> Cargo: &nbsp; &nbsp; <strong> {{ $empleado->cargo }}</strong></li>
    <li class="list-group-item"> Teléfono: &nbsp; &nbsp; <strong> {{ $empleado->telefono }}</strong></li>
  <li class="list-group-item"> Imagen de perfil: &nbsp; &nbsp; <br>
   <img src="{{ asset('avatars/' . $empleado->avatar) }}" alt="Avatar" width="150" height="150" />
</li>
</ul>
@endsection