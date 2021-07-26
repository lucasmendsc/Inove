<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\ViewModels\ProdutoViewModel;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos =  Produto::all();

        return view('produto/index', new ProdutoViewModel($produtos));
    }

    public function cadastrar()
    {
        return view('produto/cadastrar');
    }

    public function editar(Request $request)
    {
        $produto = Produto::where('id', $request->id)
            ->first();

        $produtos[0] =  $produto;

        return view('produto/editar', new ProdutoViewModel($produtos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $produto = new Produto();

        $produto->id_empresa = $request->empresa;
        $produto->descricao = $request->descricao;
        //$produto->foto = $request->foto;
        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $produto = Produto::where('nome', "nome")
            ->first();

        return $produto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $produto = Produto::where('id', $request->id)
            ->first();

        $produto->id_empresa = $request->id_empresa;;
        $produto->descricao = $request->descricao;
        $produto->foto = $request->foto;
        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;

        $produto->update();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $produto = Produto::where('id', $request->id)
            ->first();

        $produto->delete();
    }
}
