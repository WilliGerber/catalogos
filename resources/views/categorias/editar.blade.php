@extends('master')

@section('title')
{{"Editar categoria - ".$registro->nome}}
@endsection

@section('js')
{{url('js/categorias-editar.js')}}
@endsection

@section('css')
{{url('css/categorias-editar.css')}}
@endsection

@section('content')

<form action="{{route('categorias.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put">
    @include('categorias._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection