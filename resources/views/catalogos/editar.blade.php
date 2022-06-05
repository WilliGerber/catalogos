@extends('master')

@section('title')
{{"Editar Cargos - ".$registro->nome}}
@endsection

@section('js')
{{url('js/catalogos-editar.js')}}
@endsection

@section('css')
{{url('css/catalogos-editar.css')}}
@endsection

@section('content')

<form action="{{route('catalogos.atualizar', $catalogo->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put">
    @include('catalogos._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection