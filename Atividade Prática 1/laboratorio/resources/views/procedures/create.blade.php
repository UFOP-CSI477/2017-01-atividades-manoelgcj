@extends('principal')

@section('conteudo')

<h1>Inserir procedimento</h1>

<form method="post" action="/procedures">

  {{ csrf_field() }}

  Nome: <input type="text" name="name" maxlength="100"><br>
  Preço: <input type="text" name="price"><br>
  <input type="hidden" name="user_id" value="{{ Auth::id() }}"><br>
  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
