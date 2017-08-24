@extends('principal')

@section('conteudo')

<div class="container-fluid bg-3 text-center">
  <h3>Produtos em oferta!</h3><br>
      @foreach($produtos as $p)
          @if ($loop->first || $loop->iteration % 5 == 0)
            <div class="row"><br><br>
          @endif
          <!-- {{ $loop->index }} -{{ '' }} -->
          <!-- <i class="fa fa-tags"></i> -->
              <div class="col-sm-3" align="center">
                  <img src="/img/{{ $p->nome }}.png" class="img-responsive" style="width:50%" alt="Image">
                  {{ $p->nome }}<br>
                  {{ $p-> preco }}<br>
                  <a href="/loja/view/{{ $p->id }}">Ver detalhes</a>
              </div>
          @if ($loop->last || $loop->iteration % 4 == 0)
            </div>
          @endif
      @endforeach
@endsection
