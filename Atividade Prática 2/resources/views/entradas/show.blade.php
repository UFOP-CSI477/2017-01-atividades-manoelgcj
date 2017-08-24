@extends('principal')

@section('conteudo')

<h1>Excluir entrada</h1>
<a href="/entradas" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $entrada->id }}</p>
<p>ID do Produto: {{ $entrada->produto_id }}</p>
<p>ID do Fornecedor: {{ $entrada->fornecedor_id }}</p>

<form method="post" action="/entradas/{{ $entrada->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
