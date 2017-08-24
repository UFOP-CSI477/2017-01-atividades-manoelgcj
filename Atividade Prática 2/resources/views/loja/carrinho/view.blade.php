@extends('principal')

@section('conteudo')
<h1>Carrinho de compras</h1>

<a href="/carrinho/comprar" class="btn btn-primary">Comprar</a><br><br>

@if(Session::has('carrinho'))

@php
  $carrinho = Session::get('carrinho');
  //var_dump($carrinho);
@endphp

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código do produto</th>
          <th>Nome do produto</th>
          <th>Quantidade</th>
      </tr>
  </thead>

  <tbody>
    @foreach($carrinho as $c)
      <tr>
          <td>{{ $c->produto_id }}</td>
          <td>{{ $c->produto->nome }}</td>
          <td>{{ $c->quantidade }}</td>
      </tr>
    @endforeach

      </tbody>

</table>

@else
    <p class="alert alert-warning">Não existe nenhum produto no carrinho!</p>
@endif<a href="/" class="btn btn-primary">Selecionar mais produtos</a><br><br>

@endsection
