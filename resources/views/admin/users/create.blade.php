@extends('layouts.app')

@section('content')
<div class="container">
    <p>Esta es la página de Create. Para Crear Usuarios</p>

    <form action="/admin/users" method="POST">
    {{csrf_field()}}
        <p>Nombre: <input type="text" name="name" ></p>
        <p>Email: <input type="text" name="email" ></p>
        <p>Contraseña: <input type="text" name="password" ></p>
        <p>Rol: <input type="number" name="role_id" min="1"></p>
        
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</div>
@endsection
