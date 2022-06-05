@csrf
<div class="form-group-access">
  <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome Fornecedor" name="nome" required
  </div>

  <div class="form-group">
    <label for="categoria">Selecione uma Categoria</label>
    <select class="form-control" name="id_categoria" id="categoria">
        <option value="" selected>Categoria</option>
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}" {{ isset($registro->id_categoria) && $registro->id_categoria == $categoria->id ? 'selected' : '' }} >{{ $categoria->nome }}</option>
        @endforeach
    </select>
</div>

</div>
