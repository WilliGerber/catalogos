<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\CategoriaController;




// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('login.entrar');
Route::get('/login/sair', [LoginController::class, 'sair'])->name('login.sair');

// // DASHBOARD
Route::get('/catalogos', [CatalogosController::class, 'index'])->name('catalogos');

// USUARIOS
//Route::get('/usuarios/criar-usuario', [UsuarioController::class, 'criarUsuario'])->name('usuarios.criar-usuario');
//Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
Route::get('/usuarios/adicionar', [UsuarioController::class, 'adicionar'])->name('usuarios.adicionar');
Route::post('/usuarios/salvar', [UsuarioController::class, 'salvar'])->name('usuarios.salvar');
//Route::get('/usuarios/editar/{id}', [UsuarioController::class, 'editar'])->name('usuarios.editar');
Route::put('/usuarios/atualizar/{id}', [UsuarioController::class, 'atualizar'])->name('usuarios.atualizar');
//Route::delete('usuarios/deletar/{id}', [UsuarioController::class, 'deletar'])->name('usuarios.delete');

//  CATALOGOS
Route::get('/catalogos', [CatalogoController::class, 'index'])->name('catalogos');
Route::get('/catalogos/adicionar', [CatalogoController::class, 'adicionar'])->name('catalogos.adicionar');
Route::post('/catalogos/salvar', [CatalogoController::class, 'salvar'])->name('catalogos.salvar');
Route::get('/catalogos/editar/{id}', [CatalogoController::class, 'editar'])->name('catalogos.editar');
Route::put('/catalogos/atualizar/{id}', [CatalogoController::class, 'atualizar'])->name('catalogos.atualizar');
Route::get('/catalogos/lista', [CatalogoController::class, 'lista'])->name('catalogos.lista');
Route::get('/catalogos/todos', [CatalogoController::class, 'todos'])->name('catalogos.todos');
Route::delete('catalogos/deletar/{id}', [CatalogoController::class, 'deletar'])->name('catalogos.deletar');
Route::get('catalogos/download/{id}', [CatalogoController::class, 'download'])->name('catalogos.download');
Route::get('catalogos/categoria/{id}', [CatalogoController::class, 'filtroCategoria'])->name('catalogos.categoria');


// //  FORNECEDORES
//Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores');
//Route::get('/fornecedores/adicionar', [FornecedorController::class, 'adicionar'])->name('fornecedores.adicionar');
//Route::post('/fornecedores/salvar', [FornecedorController::class, 'salvar'])->name('fornecedores.salvar');
//Route::get('/fornecedores/editar/{id}', [FornecedorController::class, 'editar'])->name('fornecedores.editar');
//Route::put('/fornecedores/atualizar/{id}', [FornecedorController::class, 'atualizar'])->name('fornecedores.atualizar');
//Route::delete('fornecedores/deletar/{id}', [FornecedorController::class, 'deletar'])->name('fornecedores.deletar');

// //  CATEGORIAS
//Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
//Route::get('/categorias/adicionar', [CategoriaController::class, 'adicionar'])->name('categorias.adicionar');
//Route::post('/categorias/salvar', [CategoriaController::class, 'salvar'])->name('categorias.salvar');
//Route::get('/categorias/editar/{id}', [CategoriaController::class, 'editar'])->name('categorias.editar');
//Route::put('/categorias/atualizar/{id}', [CategoriaController::class, 'atualizar'])->name('categorias.atualizar');
//Route::delete('categorias/deletar/{id}', [CategoriaController::class, 'deletar'])->name('categorias.deletar');