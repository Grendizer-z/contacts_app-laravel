<!DOCTYPE html>
<html>
    <head>
        <title>Contactos</title>
    </head>
    <body>
        @if(Auth::check())
            <h2>Bienvenido, {{ Auth::user()->nombre }} </h2>
            <a href="{{ route('contacts.create') }}">
                <button> Añadir nuevo contacto</button>
            </a>
            <br>
            @foreach ($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->name }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>{{ $contacto->phone }}></td>
                    <td>
                        <!-- Botón para editar -->
                        <a href="{{ route('contacts.edit', $contacto->id) }}"> Editar</a>

                        <!-- Formulario para eliminar -->
                        <form action="{{ route('contacts.destroy', $contacto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"> Eliminar</button>
                        </form>
                    </td>
                </tr>
                <br>
            @endforeach
        @else
            <p>No estás autenticado.</p>
        @endif

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>


    </body>
</html>
