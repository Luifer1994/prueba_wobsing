@extends('layout.app')
@section('content')
<h3 class="mt-5">Bienvenido al sistema: <span class="text-primary">{{Auth::user()->name}}</span></h3>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button class="btn btn-danger">Cerrar sesión</button>
</form>
@endsection
