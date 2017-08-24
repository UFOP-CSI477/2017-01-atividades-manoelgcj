@extends('principal')

@section('conteudo')

<h1>Excluir produto</h1>
<a href="/produtos" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $produto->id }}</p>
<p>Nome: {{ $produto->nome }}</p>
<p>Preço: {{ $produto->preco }}</p>

<form method="post" action="/produtos/{{ $produto->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
