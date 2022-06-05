<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioController extends Controller
{   
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registros = user::all();
        // dd($registros);
        return view('usuarios.index', compact('registros'));
    }

    public function adicionar() {
        // if(!Auth::check()) return redirect()->route('login');
        return view ('usuarios.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        if ($req->has('profissional')){
            $dados['profissional'] = true;
        }else{
            $dados['profissional'] = false;
        }
        $dados['admin'] = 0;
        $dados['id_usuario_ultima_alteracao'] = 1;
        $dados['password'] = Hash::make($dados['senha']);
        user::create($dados);

        return redirect()->route('login');
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registro= user::find($id);
        return view('usuarios.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $dados = $req->all();
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        if ($req->has('admin')){
            $dados['admin'] = true;
        }else{
            $dados['admin'] = false;
        }
        $dados['password'] = Hash::make($dados['senha']);
        user::find($id)->update($dados);
        return redirect()->route('catalogos.lista');
    }
    
    public function deletar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        if(!$registro = User::find($id))
            return redirect()
            ->route('usuarios')
            ->with('message', 'Catalogo Deletado com Sucesso!');
        $registro->delete();
        return redirect()->route('usuarios');
    }
}

