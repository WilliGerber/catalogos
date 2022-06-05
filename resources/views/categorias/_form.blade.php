@csrf
<div class="form-group-access">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome Categoria" name="nome" value= "{{ $registro->nome ?? "" }}" required>
    </div>

    <div class="form-group">
        <label for="categoria">Descrição</label>
        <input type="text" class="form-control" id="categoria" placeholder="Descrição da categoria" name="categoria" value= "{{ $registro->nome ?? "" }}" required>
    </div>
    <div class="form-group">
        <label for="image" class="form-label">Selecionar Banner Categoria</label>
        <input class="form-control" type="file" name="image" required>
    </div>

</div>
