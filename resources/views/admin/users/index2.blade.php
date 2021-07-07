@extends('layouts.app')

@section('content')
<div class="container">
    <p>Esta es la pagina index </p>

    <table class="default">

  <tr>

    <th>Id</th>

    <th>Rol_Id</th>

    <th>Nombre</th>

    <th>Email</th>

    <th>Created_at</th>

    <th>Updated_at</th>

  </tr>

  @if($users)  
  @foreach ($users as $user)

  <tr>

    <td>{{$user->id}}</td>

    <td>{{$user->role_id}}</td>

    <td>{{$user->nombre}}</td>

    <td>{{$user->email}}</td>

    <td>{{$user->created_at}}</td>

    <td>{{$user->updated_at}}</td>

  </tr>

  @endforeach
  @endif

</table>
</div>
@endsection
