@extends('principal')

@section('conteudo')

<div align="center"><h1>Exames</h1></div>

<!-- <a class="btn btn-primary" href="/tests/create">Novo exame</a><br><br> -->

<table class="table table-bordered table-hover table-condensed table-striped">


  <thead>
      <tr>
          <th>Código</th>
          <th>Código do usuário</th>
          <th>Código do procedimento</th>
          <!-- <th>Editar</th> -->
          <!-- <th>Excluir</th> -->
      </tr>
  </thead>

  <tbody>
    @foreach($tests as $t)
      <tr>
          <td>{{ $t->id }}</td>
          <td>{{ $t->user_id }}</td>
          <td>{{ $t->procedure_id }}</td>
          <!-- <td><div align="center"><a href="tests/{{ $t->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td> -->
          <!-- <td><div align="center"><a href="tests/{{ $t->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td> -->
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
