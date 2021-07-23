<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();

        $empresa->nome = "nome";
        $empresa->razao = "razao";
        $empresa->cnpj = "cnpj";
        $empresa->email = "email";
        $empresa->rua = "rua";
        $empresa->bairro = "bairro";
        $empresa->complemento = "complemento";
        $empresa->cidade = "cidade";
        $empresa->estado = "estado";
        $empresa->cep = "cep";
        $empresa->telefone = "telefone";
        $empresa->numero = 2;
        $empresa->ativo = 1;

        $empresa->save();
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
        $empresa = Empresa::where('nome', "nome")
            ->first();

        return $empresa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $empresa = empresa::where('id', $request->id)
            ->first();

        $empresa->nome = $request->nome;
        $empresa->razao = $request->razao;
        $empresa->cnpj = $request->cnpj;
        $empresa->email = $request->email;
        $empresa->rua = $request->rua;
        $empresa->bairro = $request->bairro;
        $empresa->complemento = $request->complemento;
        $empresa->cidade = $request->cidade;
        $empresa->estado = $request->estado;
        $empresa->cep = $request->cep;
        $empresa->telefone = $request->telefone;
        $empresa->numero = $request->numero;
        $empresa->ativo = $request->ativo;

        $empresa->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $empresa = empresa::where('id', $request->id)
        ->first();

        $empresa->delete();
    }
}
