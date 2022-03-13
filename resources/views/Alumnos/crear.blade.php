<head>
    <form action="{{ route('Alumnos.store') }}" method="POST">
        @csrf
        <input type="text" name="Nombre" placeholder="Nombre"><br>
        <input type="text" name="Apellido_Paterno" placeholder="Apellido_Paterno"><br>
        <input type="text" name="Apellido_Materno" placeholder="Apellido_Materno"><br>
        <input type="text" name="Matricula" placeholder="Matricula"><br>
        <input type="text" name="Correo" placeholder="Correo"><br>
        <button type="submit"> guardar </button>

    </form>
</head>
