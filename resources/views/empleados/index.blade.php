<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Cédula</th>
                <th scope="col">Cargo</th>
                <th scope="col">Avatar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr id="empleado_{{ $empleado->id }}">
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->edad }}</td>
                    <td>{{ $empleado->cedula }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>
                        @if($empleado->avatar)
                        <img src="avatars/{{ $empleado->avatar }}" alt="Avatar" width="50" height="50" />
                        @else
                        <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
                        @endif
                    </td>
                    <td>
                        <a title="Ver detalles del empleado" href="{{ route('myShow', $empleado->id)}}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                        <a href="{{ route('myEdit', $empleado->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>   
                        <form action="{{ route('mydestroy', $empleado->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este registro?');"><i class="bi bi-trash"></i> </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>