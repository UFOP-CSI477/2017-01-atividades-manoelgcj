@extends('principal')

@section('conteudo')

<h1>Excluir fornecedor</h1>
<a href="/fornecedores" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $fornecedor->id }}</p>
<p>Nome: {{ $fornecedor->nome }}</p>
<p>Nome Fantasia: {{ $fornecedor->nomeFantasia }}</p>
<p>Telefone: {{ $fornecedor->telefone }}</p>

<form method="post" action="/fornecedores/{{ $fornecedor->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
