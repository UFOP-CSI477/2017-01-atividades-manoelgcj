@extends('principal')

@section('conteudo')

<div align="center"><h1>Produtos</h1></div>

<a class="btn btn-primary" href="/produtos/create">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">


  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($produtos as $p)
      <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->nome }}</td>
          <td>{{ $p->preco }}</td>
          <td><div align="center"><a href="produtos/{{ $p->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="produtos/{{ $p->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
