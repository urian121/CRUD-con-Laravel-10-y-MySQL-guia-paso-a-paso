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
                        <!--
                        El helper asset generará la URL completa a la carpeta de avatares, asegurando que las imágenes se carguen correctamente independientemente de la ruta en la que te encuentres dentro de tu aplicación Laravel.
                        -->
                        <img src="{{ asset('avatars/' . $empleado->avatar) }}" alt="Avatar" width="50" height="50" />
                        @else
                        <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
                        @endif
                    </td>
                    <td>
                         <ul class="flex_acciones">
                            <li>
                                <a title="Ver detalles del empleado" href="{{ route('myShow', $empleado->id)}}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('myEdit', $empleado->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>   
                            </li>
                            <li>
                                <form action="{{ route('myDestroy', $empleado->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este registro?');"><i class="bi bi-trash"></i> </button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
