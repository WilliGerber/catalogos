<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\catalogo;
use App\Models\fornecedor;
use App\Models\categoria;


class CatalogoController extends Controller
{
    public function index() {
        if(!Auth::check()) return redirect()->route('login');
        $catalogos = catalogo::all();
        $fornecedores = fornecedor::all();
        $categorias = categoria::all();
        $categ = null;
        return view('catalogos.index', compact('catalogos', 'fornecedores', 'categorias', 'categ'));
    }
    
    // public function todos() {
    //     if(!Auth::check() && Auth::user()->admin == 1) return redirect()->route('login');
    //     $registros = catalogo::all();
    //     return view('catalogos.todos', compact('registros'));
    // }

    public function adicionar() {
        if(!Auth::check()) return redirect()->route('login');
        $fornecedores = fornecedor::all();
        $categorias = categoria::all();
        return view ('catalogos.adicionar', compact('fornecedores', 'categorias'));
    }

    public function salvar(Request $req) {
        $dados = $req->all();
        // dd($req->file('image')->store('public/catalogos/capa'));

        if ($req->file('catalogo')->isValid()) {
            $dados['catalogo'] = $req->file('catalogo')->store('catalogos/catalogo');
        }
        if ($req->file('image')->isValid()) {
            // dd($req->file('image')->store('public/catalogos/capa'));
            $dados['image'] = $req->file('image')->store('catalogos/capa');
        }
        $dados['admin'] = 0;
        $dados['id_usuario_ultima_alteracao'] = Auth::user()->id;
        catalogo::create($dados);
        $registros = catalogo::all();
        return redirect()->route('catalogos.lista', compact('registros'));
    }

    public function editar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registro= catalogo::find($id);
        $fornecedores = fornecedor::all();
        $categorias = categoria::all();
        return view('catalogos.editar', compact('registro', 'fornecedores', 'categorias'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();
        if(!Auth::check() && Auth::user()->admin == 1) return redirect()->route('login');
        if ($req->file('catalogo')->isValid()) {
            $dados['catalogo'] = $req->file('catalogo')->store('catalogos/catalogo');
        }
        if ($req->file('image')->isValid()) {
            // dd($req->file('image')->store('public/catalogos/capa'));
            $dados['image'] = $req->file('image')->store('catalogos/capa');
        }  
        catalogo::find($id)->update($dados);
        return redirect()->route('catalogos');
    }

    public function lista(Request $req) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        $registros = catalogo::all();
        return view('catalogos.lista', compact('registros'));
    }
    
    public function deletar($id) {
        if(!Auth::check()) return redirect()->route('login');
        if(Auth::user()->admin == 0) return redirect()->route('catalogos');
        if(!$registro = catalogo::find($id))
            return redirect()
            ->route('catalogos')
            ->with('message', 'Catalogo Deletado com Sucesso!');
        $registro->delete();
        
        return redirect()->route('catalogos.lista');
    }
    
    public function download($id) {
        if(!Auth::check()) return redirect()->route('login');
        $registro = catalogo::find($id);
        $filePath = "storage/app/public/".$registro['catalogo'];

    	$headers = ['Content-Type: application/pdf'];
    	$fileName = $registro['nome'].'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }
    
    public function filtroCategoria($id) {
        if(!Auth::check()) return redirect()->route('login');
        $catalogos = DB::table('catalogos')
            ->where('id_categoria', $id)
            ->select('*')
            ->get();
        $fornecedores = fornecedor::all();
        $categorias = categoria::all();
        $categ = categoria::find($id);
        return view('catalogos.index', compact('catalogos', 'fornecedores', 'categorias', 'categ'));
    }
}
