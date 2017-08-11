@extends('principal')

@section('conteudo')

<h1>Excluir procedimento</h1>
<a href="/procedures" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $procedure->id }}</p>
<p>Nome: {{ $procedure->name }}</p>
<p>Preço: {{ $procedure->price }}</p>
<p>ID_user: {{ $procedure->user_id }}</p>

<form method="post" action="/procedures/{{ $procedure->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão" class="btn btn-primary">

</form>

@endsection
