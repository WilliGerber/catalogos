<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\fornecedor;
use App\Models\categoria;



class FornecedorController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registros = DB::table('fornecedores')
        ->join('categorias', 'categorias.id', '=', 'fornecedores.id_categoria')
        ->select('fornecedores.id as id', 'fornecedores.nome as nome', 'categorias.nome as categoria')
        ->get();
        return view('fornecedores.index', compact('registros'));
    }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $categorias = categoria::all();
        return view ('fornecedores.adicionar', compact('categorias'));
    }

    public function salvar(Request $req) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $dados = $req->all(); 
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        fornecedor::create($dados);
        return redirect()->route('fornecedores');        
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registro = fornecedor::find($id);
        $categorias = categoria::all();
        return view('fornecedores.editar', compact('registro', 'categorias'));
    }

    public function atualizar(Request $req, $id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        fornecedor::find($id)->update($dados);
        return redirect()->route('fornecedores');
    }
    
    public function deletar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        if(!$registro = fornecedor::find($id))
            return redirect()
            ->route('fornecedores')
            ->with('message', 'Fornecedor Deletado com Sucesso!');
        $registro->delete();
        
        return redirect()->route('fornecedores');
    }
}
