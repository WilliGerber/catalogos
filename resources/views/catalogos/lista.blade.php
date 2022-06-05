@extends('master')

@section('title', 'Catálogos')

@section('js')
{{url('js/catalogos.js')}}
@endsection

@section('css')
{{url('css/catalogos.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('catalogos.adicionar')}}">Adicionar</a>

<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Fornecedor</th>
            <th>Categoria</th>
            <th>Arquivo</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->descricao}}</td>
            <td>{{$registro->fornecedor}}</td>
            <td>{{$registro->categoria}}</td>
            <td>{{$registro->file_path}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('catalogos.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <form action="{{ route('catalogos.deletar', $registro->id) }}" method="post">
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