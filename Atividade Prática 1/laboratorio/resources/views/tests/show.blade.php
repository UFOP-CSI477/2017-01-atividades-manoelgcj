@extends('principal')

@section('conteudo')

<h1>Excluir exame</h1>
<a href="/tests" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $test->id }}</p>
<p>Data: {{ $test->date }}</p>

<form method="post" action="/tests/{{ $test->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão" class="btn btn-primary">

</form>

@endsection
