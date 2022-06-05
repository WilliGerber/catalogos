<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\categoria;


use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registros = categoria::all();
        return view('categorias.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        return view ('categorias.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all(); 
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        if ($req->file('image')->isValid()) {
            // dd($req->file('image')->store('public/catalogos/capa'));
            $dados['image'] = $req->file('image')->store('categorias');
        };
        categoria::create($dados);
        return redirect()->route('categorias');    
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registro= categoria::find($id);
        return view('categorias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        if ($req->file('image')->isValid()) {
            // dd($req->file('image')->store('public/catalogos/capa'));
            $dados['image'] = $req->file('image')->store('categorias');
        };
        categoria::find($id)->update($dados);
        return redirect()->route('categorias');
    }
}
