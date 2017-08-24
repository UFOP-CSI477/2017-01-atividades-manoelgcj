<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Item;
use App\Compra;

class CarrinhoController extends Controller
{
    public function add(Request $request, Produto $produto) {

        if ($request->session()->has('carrinho')) {
          $carrinho = $request->session()->get('carrinho');
        } else {
          $carrinho = [];
        }

        $item = new Item;
        $item->produto_id = $produto->id;
        $item->quantidade = $request->quantidade;

        array_push($carrinho, $item);

        $request->session()->put('carrinho', $carrinho);
        // ou session([ 'carrinho' => $carrinho])

        return redirect('/carrinho');

    }

    public function view() {
      return view('loja.carrinho.view');
    }

    public function store() {
      // Se está logado
      if( Auth::check() ) {
          //Persistir a compra
          if (session()->has('carrinho')) {
            $carrinho = session()->get('carrinho');
          } else {
            session()->flash('mensagem', 'O carrinho de compras está vazio!');
            session()->flash('tipo', 'alert-warning');
            return redirect('/');
          }

          $compra = new Compra;
          $compra->user_id = Auth::id();
          $compra->save();

          foreach ($carrinho as $c) {
            $c->compra_id = $compra->id;
            $c->save();
          }

          session()->forget('carrinho');
          session()->flash('mensagem', 'Compra realizada com sucesso!');
          session()->flash('tipo', 'alert-info');
          return redirect('/');


      } else {
          // Redireciona para login
          return redirect('/login');
      }
    }
}
