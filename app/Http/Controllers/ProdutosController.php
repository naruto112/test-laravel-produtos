<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.home', compact('produtos'));
    }

    public function show($index)
    {
        return Produto::offset($index * 5)->limit(5)->get();
    }

    public function product()
    {
        $produtos = Produto::all();
        return view('produtos.form', compact('produtos'));
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return redirect('/');
    }

    public function saveByProdutct(Request $request, $id)
    {
        $produto = Produto::where('id', $id)->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        if ($produto) {
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $produtos = Produto::findOrFail($id);
        return view('produtos.form', compact('produtos'));
    }

    public function destroy($id)
    {
        $produto = Produto::where('id', $id)->delete();

        if ($produto) {
            return redirect('/');
        }
    }
}
