@extends('master')

@section('title', 'Categorias')

@section('js')
{{url('js/categorias.js')}}
@endsection

@section('css')
{{url('css/categorias.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('categorias.adicionar')}}">Adicionar</a>

<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->categoria}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('categorias.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection