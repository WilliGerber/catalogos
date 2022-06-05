@extends('master')

@section('title', 'Novo Catálogo')

@section('js')
{{url('js/catolo-adicionar.js')}}
@endsection

@section('css')
{{asset('css/catalogo-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('catalogos.salvar')}}" method="post" enctype="multipart/form-data">
    @include('catalogos._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection