@extends('principal')

@section('conteudo')

<h1>Solicitar exame</h1>

<form method="post" action="/tests">

  {{ csrf_field() }}

  Data: <input type="date" name="date"><br><br>

  Procedimento:
  <select name="procedure_id">
    <option value="">Selecione</option>

    @foreach($procedures as $p)
      <option value="{{ $p->id }}">{{ $p->name }} - R${{ $p->price }}</option>
    @endforeach

  </select><br>

  <input type="hidden" name="user_id" value="{{ Auth::id() }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
