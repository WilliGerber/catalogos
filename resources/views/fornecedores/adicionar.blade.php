@extends('master')

@section('title', 'Novo Fornecedor')

@section('js')
{{url('js/fornecedores-adicionar.js')}}
@endsection

@section('css')
{{asset('css/fornecedores-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('fornecedores.salvar')}}" method="post">
    @include('fornecedores._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection