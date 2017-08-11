@extends('principal')

@section('conteudo')

<h1>Inserir paciente</h1>

<form method="post" action="/users">

  {{ csrf_field() }}

  Nome: <input type="text" name="name" maxlength="100"><br>
  E-mail: <input type="text" name="email"><br>
  Senha: <input type="text" name="password"><br>
  Tipo: <input type="text" name="type"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
