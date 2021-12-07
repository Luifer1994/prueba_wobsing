@extends('layout.app')
@section('content')
<h2 class="mt-5">Bienvenido al sistema</h2>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button class="btn btn-danger">Cerrar sesión</button>
</form>
@endsection
