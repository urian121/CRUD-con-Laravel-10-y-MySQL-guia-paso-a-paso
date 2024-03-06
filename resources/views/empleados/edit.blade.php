@extends('layouts.app')
@section('title')
    | Editar empleado
@endsection

@section('content')
<h1 class="text-center">
    <a class="float-start" title="Volver" href="{{ route('home') }}">
        <i class="bi bi-arrow-left-circle"></i>
    </a>
    Editar datos del empleado <hr>
</h1>

<form  action="{{ route('myUpdate', $empleado->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{ $empleado->nombre }}" />
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Cédula (NIT)</label>
            <input type="text" name="cedula" class="form-control" required value="{{ $empleado->cedula }}" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Seleccione la edad</label>
            <select class="form-select" name="edad" required>
                <option value="">Edad</option>
                @for ($i = 18; $i <= 50; $i++)
                    <option value="{{ $i }}" {{ $i == $empleado->edad ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_m" value="Masculino" {{ $empleado->sexo == 'Masculino' ? 'checked' : '' }}>
                <label class="form-check-label" for="sexo_m">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_f" value="Femenino" {{ $empleado->sexo == 'Femenino' ? 'checked' : '' }}>
                <label class="form-check-label" for="sexo_f">
                    Femenino
                </label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <label class="form-label">Teléfono</label>
            <input type="number" name="telefono" class="form-control" required value="{{ $empleado->telefono }}" />
        </div>
        <div class="col-md-6 mb-3">
                <label class="form-label">Seleccione el Cargo</label>
                <select name="cargo" class="form-select" required>
                    <option value="">Cargo</option>
                    <?php
                    $cargos = [
                        "Gerente",
                        "Asistente",
                        "Analista",
                        "Contador",
                        "Secretario",
                        "Desarrollador Web"
                    ];
                    ?>
                    @foreach($cargos as $cargo)
                        <option value="{{ $cargo }}" {{ $cargo == $empleado->cargo ? 'selected' : '' }}>{{ $cargo }}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 mb-3 mt-3">
            <label class="form-label">foto actual del Empleado</label>
            @if($empleado->avatar)
                <img src="{{ asset('avatars/' . $empleado->avatar) }}" alt="Avatar" width="50" height="50" />
            @else
                <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
            @endif
        </div>
        <div class="col-md-6 mb-3 mt-3">
            <label class="form-label">Cambiar Foto del empleado</label>
            <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg"/>
        </div>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Actualizar datos del Empleado
        </button>
    </div>
</form>
@endsection