@extends('master')

@section('title')
{{"Editar forncedor - ".$registro->nome}}
@endsection

@section('js')
{{url('js/fornecedores-editar.js')}}
@endsection

@section('css')
{{url('css/fornecedores-editar.css')}}
@endsection

@section('content')

<form action="{{route('fornecedores.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('fornecedores._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection