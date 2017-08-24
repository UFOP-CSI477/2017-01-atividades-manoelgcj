@extends('principal')

@section('conteudo')

<h1>Inserir fornecedor</h1>

<a href="/fornecedores" class="btn btn-primary">Voltar</a><br><br>

<form method="post" action="/fornecedores" class="form-group">

  {{ csrf_field() }}

  Nome: <input type="text" name="nome" maxlength="100" class="form-control"><br>
  Nome Fantasia: <input type="text" name="nomeFantasia" class="form-control"><br>
  Telefone: <input type="text" name="telefone" class="form-control"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
