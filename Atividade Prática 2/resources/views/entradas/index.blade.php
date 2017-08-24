@extends('principal')

@section('conteudo')

<div align="center"><h1>Entradas</h1></div>

<a class="btn btn-primary" href="/entradas/create">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">


  <thead>
      <tr>
          <th>Código</th>
          <th>Produto</th>
          <th>Fornecedor</th>
          <th>Quantidade</th>
          <th>Data</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($entradas as $e)
      <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->produto->nome }}</td>
          <td>{{ $e->fornecedor->nome }}</td>
          <td>{{ $e->quantidade }}</td>
          <td>{{ $e->created_at }}</td>
          <td><div align="center"><a href="/entradas/{{ $e->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="/entradas/{{ $e->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
