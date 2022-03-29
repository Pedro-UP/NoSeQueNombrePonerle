<head>
    <form action="{{ route('Alumnos.update', $Alumnos->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <input type="text" name="Nombre" placeholder="Nombre" value="{{ $Alumnos->Nombre }}"><br>
        <input type="text" name="Apellido_Paterno" placeholder="Apellido_Paterno"
            value="{{ $Alumnos->Apellido_Paterno }}"><br>
        <input type="text" name="Apellido_Materno" placeholder="Apellido_Materno"
            value="{{ $Alumnos->Apellido_Materno }}"><br>
        <input type="text" name="Matricula" placeholder="Matricula" value="{{ $Alumnos->Matricula }}"><br>
        <input type="text" name="Correo" placeholder="Correo" value="{{ $Alumnos->Correo }}"><br>
        <button type="submit"> guardar </button>
    </form>
</head>
