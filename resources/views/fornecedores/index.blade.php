@extends('master')

@section('title', 'Fornecedores')

@section('js')
{{url('js/fornecedores.js')}}
@endsection

@section('css')
{{url('css/fornecedores.css')}}
@endsection

@section('content')

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<a class="btn btn-primary mb-4" href="{{route('fornecedores.adicionar')}}">Adicionar</a>

<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->categoria}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('fornecedores.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            <td>
                <form action="{{ route('fornecedores.deletar', $registro->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" style="border:none; background:none"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection