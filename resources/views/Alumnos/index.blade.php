<table>
    <a href="{{ route('Alumnos.create') }}"> Nuevo alumno </a>

    <head>
        <tr>
            <th> Id </th>
            <th> Nombre </th>
            <th> Apellido_Paterno </th>
            <th> Apellido_Materno </th>
            <th> Matricula </th>
            <th> Correo </th>
        </tr>
    </head>
    <tbody>
        @foreach ($Alumnos as $alumnos)
            <tr>
                <td> {{$alumnos->id}} </td>
                <td> {{$alumnos->Nombre}} </td>
                <td> {{$alumnos->Apellido_Paterno}} </td>
                <td> {{$alumnos->Apellido_Materno}} </td>
                <td> {{$alumnos->Matricula}} </td>
                <td> {{$alumnos->Correo}} </td>
            </tr>
        @endforeach()
    </tbody>
</table>
