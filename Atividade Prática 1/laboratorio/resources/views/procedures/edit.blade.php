@extends('principal')

@section('conteudo')

<h1>Editar procedimento</h1>

<a class="btn btn-primary" href="/procedures">Voltar</a>

<form method="post" action="/procedures/{{ $procedure->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Nome: <input type="text" name="name" maxlength="100" value="{{ $procedure->name }}"><br>
  Preço: <input type="text" name="price" value="{{ $procedure->price }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
