@extends('principal')

@section('conteudo')

<div align="center"><h1>Usuários</h1></div>

<!-- <a class="btn btn-primary" href="{{ route('register') }}">Inserir</a><br><br> -->
<a class="btn btn-primary" href="/users/create">Inserir</a><br><br>



<table class="table table-bordered table-hover table-condensed table-striped">


  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Tipo</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($users as $u)
      <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->name }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->type }}</td>
          <td><div align="center"><a href="users/{{ $u->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="users/{{ $u->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
