@extends('principal')

@section('conteudo')

<h1>Inserir entrada</h1>

<a href="/entradas" class="btn btn-primary">Voltar</a><br><br>

<form method="post" action="/entradas" class="form-group">

  {{ csrf_field() }}

  Produtos:
  <select name="produto_id" class="form-control">
      <option value="">Selecione: </option>
      @foreach($produtos as $p)
        <option value="{{ $p->id }}">{{ $p->nome }}</option>
      @endforeach
  </select>

  <br>Fornecedores:
  <select name="fornecedor_id" class="form-control">
      <option value="">Selecione: </option>
      @foreach($fornecedores as $f)
        <option value="{{ $f->id }}">{{ $f->nome }}</option>
      @endforeach
  </select><br>


  Quantidade: <input type="text" name="quantidade" class="form-control"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
