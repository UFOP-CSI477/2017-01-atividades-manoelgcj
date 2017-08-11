@extends('principal')

@section('conteudo')

<div align="center"><h1>Procedimentos</h1></div>

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Preço</th>
      </tr>
  </thead>

  <tbody>
    @foreach($procedures as $p)
      <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->price }}</td>
      </tr>
      @endforeach

      </tbody>

</table>

@endsection
