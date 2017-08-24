@extends('principal')

@section('conteudo')

<h1>Inserir produto</h1>

<a href="/produtos" class="btn btn-primary">Voltar</a><br><br>

<form method="post" action="/produtos" class="form-group">

  {{ csrf_field() }}

  Nome: <input type="text" name="nome" maxlength="100" class="form-control"><br>
  Preço: <input type="text" name="preco" class="form-control"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
