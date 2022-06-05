@extends('master')

@section('title', 'Nova Categoria')

@section('js')
{{url('js/categorias-adicionar.js')}}
@endsection

@section('css')
{{asset('css/categorias-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('categorias.salvar')}}" method="post" enctype="multipart/form-data">
    @include('categorias._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection