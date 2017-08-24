@extends('principal')

@section('conteudo')

    <h1>Detalhes do produto</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="/img/{{ $produto->nome }}.png" class="img-responsive" style="width:30%" alt="Image">
            Nome: {{ $produto->nome }}<br>
            Preço: {{ $produto->preco }}

            <form method="post" action="/carrinho/adicionar/{{$produto->id}}">
                {{ csrf_field() }}
                Quantidade: <input type="text" name="quantidade" value="1"><br><br>
                <input type="submit" value="Inserir no carrinho" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
