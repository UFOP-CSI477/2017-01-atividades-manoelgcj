@extends('principal')

@section('conteudo')

<h1>Editar exame</h1>

<a class="btn btn-primary" href="/tests">Voltar</a>

<form method="post" action="/tests/{{ $test->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Data:<input type="text" name="date" value="{{ $test->date }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
