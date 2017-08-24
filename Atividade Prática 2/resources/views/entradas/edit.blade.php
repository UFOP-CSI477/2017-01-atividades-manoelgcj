@extends('principal')

@section('conteudo')

<h1>Editar entrada</h1>

<a class="btn btn-primary" href="/entradas">Voltar</a>

<form method="post" action="/entradas/{{ $entrada->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Quantidade:<input type="text" name="quantidade" value="{{ $entrada->quantidade }}"><br>
  Produto ID:<input type="text" name="produto_id" value="{{ $entrada->produto_id }}"><br>
  Fornecedor ID:<input type="text" name="fornecedor_id" value="{{ $entrada->fornecedor_id }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
