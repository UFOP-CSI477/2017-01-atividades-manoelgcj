@extends('principal')

@section('conteudo')

<div align="center"><h1>Fornecedores</h1></div>

<a href="/fornecedores/create" class="btn btn-primary">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Nome Fantasia</th>
          <th>Telefone</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($fornecedores as $f)
      <tr>
          <td>{{ $f->id }}</td>
          <td>{{ $f->nome }}</td>
          <td>{{ $f->nomeFantasia }}</td>
          <td>{{ $f->telefone }}</td>
          <td><div align="center"><a href="fornecedores/{{ $f->id }}/edit"><img src="./editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="fornecedores/{{ $f->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
