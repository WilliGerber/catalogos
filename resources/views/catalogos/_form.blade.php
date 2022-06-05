@csrf
<div class="form-group-access">
  <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome Catálogo" name="nome" value= "{{ $registro->nome ?? "" }}" required>
  </div>

  <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" placeholder="Breve Descricao" name="descricao" value= "{{ $registro->descricao ?? "" }}" required>
  </div>

  <div class="form-group">
    <label for="fornecedor">Selecione um Fornecedor</label>
    <select class="form-control" name="id_fornecedor" id="fornecedor">
        <option value="" selected>Fornecedor</option>
        @foreach($fornecedores as $fornecedor)
        <option value="{{ $fornecedor->id }}" {{ isset($registro->id_fornecedor) && $registro->id_fornecedor == $fornecedor->id ? 'selected' : '' }} >{{ $fornecedor->nome }}</option>
        @endforeach
    </select>
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

  <div class="form-group">
    <label for="image" class="form-label">Selecionar Capa Catálogo</label>
    <input class="form-control" type="file" name="image" required>
  </div>

  <div class="form-group">
    <label for="catalogo" class="form-label">Selecionar catálogo</label>
    <input class="form-control" type="file" name="catalogo" required>
  </div>

</div>
