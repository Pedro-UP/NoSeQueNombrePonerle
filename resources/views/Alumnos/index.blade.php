@section('title', 'Alumnos')

@extends('layout')

@section('content')

    <div class="container">
        <table border="0" cellspacing="0" cellpadding="0"class="table table-hover table-bordered">
            <a href="{{ route('Alumnos.create') }}"> Nuevo alumno </a>

            <head>
                <tr>
                    <th hidden> Id </th>
                    <th> Nombre </th>
                    <th> Apellido_Paterno </th>
                    <th> Apellido_Materno </th>
                    <th> Matricula </th>
                    <th> Correo </th>
                    <th> Actualizar </th>
                    <th> Eliminar </th>
                </tr>
            </head>
            <tbody>
                @foreach ($Alumnos as $alumnos)
                    <tr>
                        <td hidden> {{ $alumnos->id }} </td>
                        <td> {{ $alumnos->Nombre }} </td>
                        <td> {{ $alumnos->Apellido_Paterno }} </td>
                        <td> {{ $alumnos->Apellido_Materno }} </td>
                        <td> {{ $alumnos->Matricula }} </td>
                        <td> {{ $alumnos->Correo }} </td>
                        <td>
                            <form action="{{ route('Alumnos.edit', $alumnos->id) }}">
                                <button class="btn btn-primary" type="submit">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('Alumnos.destroy', $alumnos->id) }}" method="post">
                                <button class="btn btn-outline-danger" onclick="return confirm('Tas seguro weon?');"
                                    type="submit">Eliminar</button>
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
@endsection
