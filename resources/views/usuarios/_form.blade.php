@csrf
<div class="form-group-access">
  <div class="form-group">
      <label for="email">E-mail</label>
      <input type="e-mail" class="form-control" id="e-mail" placeholder="e-mail@dominio.com.br" name="email" value= "{{ $registro->email ?? "" }}" required>
  </div>
  <div class="mt-3">
    <!-- <div class="col-auto pl-0">
      
    </div> -->
    <div class="col-auto pl-0">
      <label for="senha" class="col-form-label">Senha</label>
      <input name="senha" type="password" placeholder="Senha" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <!-- <div class="col-auto pl-0">
      <span id="passwordHelpInline" class="form-text">
        A senha deve conter de 8 a 20 caracteres.
      </span>
    </div> -->
  </div>
  <!-- <div class="col-auto pl-0">
    <label for="inputPassword6" class="col-form-label">Confirmação de Senha</label>
  </div>
  <div class="col-auto pl-0">
    <input type="password" placeholder="Confirme sua Senha" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div> -->

<div class="form-group mt-5">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="name" placeholder="Nome" name="nome" value= "{{ $registro->nome ?? "" }}" required>
</div>

<div class="form-group mt-2">
    <label for="celular">Celular</label>
    <input type="text" class="form-control" id="celular" placeholder="(  )         -   " name="celular" value= "{{ $registro->celular ?? "" }}" required>
</div>

<div class="form-group mt-2">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" value= "{{ $registro->cidade ?? "" }}" required>
</div>

<div class="form-group mt-2">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" placeholder="UF" name="estado" value= "{{ $registro->estado ?? "" }}" required>
</div>

<div class="form-check form-switch">
        <input name="profissional" class="form-check-input" type="checkbox" id="profissional">
            <label for="profissional" class="form-check-label" for="flexSwitchCheckDefault" type="checkbox">Profissional atuante na área</label>
</div>

<!--<div class="form-check form-switch">-->
<!--        <input name="admin" class="form-check-input" type="checkbox" id="admin" value="0">-->
<!--            <label for="admin" class="form-check-label" for="flexSwitchCheckDefault" type="checkbox">Admin</label>-->
<!--</div>-->
<!-- $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('celular')
            $table->string('cidade')
            $table->string('estado')
            $table->boolean('profissional') -->