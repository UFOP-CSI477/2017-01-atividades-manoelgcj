@extends('principal')

@section('conteudo')

<div align="center"><h1>Procedimentos</h1></div>

<a href="/procedures/create" class="btn btn-primary">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Código do Usuário</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($procedures as $p)
      <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->price }}</td>
          <td>{{ $p->user_id }}</td>
          <td><div align="center"><a href="procedures/{{ $p->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="procedures/{{ $p->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
