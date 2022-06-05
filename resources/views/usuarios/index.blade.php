@extends('master')

@section('title', 'Usuários')

@section('js')
{{url('js/cargos.js')}}
@endsection

@section('css')
{{url('css/cargos.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('usuarios.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Profissional</th>
            <th>Admin</th>
            <th>Editar</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
         <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->celular}}</td>
            <td>{{$registro->cidade}}</td>
            <td>
                @if($registro->profissional == 1)
                    <i class="fas fa-check"></i>
                @endif
            </td>
            <td>
                @if($registro->admin == 1)
                    <i class="fas fa-check"></i>
                @endif
            </td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('usuarios.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <form action="{{ route('usuarios.delete', $registro->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" style="border:none; background:none">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
