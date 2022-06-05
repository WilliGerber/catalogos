@extends('master')

@section('title')
{{"Editar Cargos - ".$registro->nome}}
@endsection

@section('js')
{{url('js/escolaridade-graus-editar.js')}}
@endsection

@section('css')
{{url('css/escolaridade-graus-editar.css')}}
@endsection

@section('content')

<form action="{{route('usuarios.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('usuarios._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection