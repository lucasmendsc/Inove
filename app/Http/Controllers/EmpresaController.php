<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\ViewModels\EmpresaViewModel;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas =  Empresa::all();

        return view('empresa/index', new EmpresaViewModel($empresas));
    }

    public function cadastrar()
    {
        return view('empresa/cadastrar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $empresa = new Empresa();

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

    public function verificarCnpj(Request $request)
    {
        $empresa = empresa::where('cnpj', $request->cnpj)
            ->first();

        if ($empresa) {
            return 0;
        } else {
            return 1;
        }
    }
    public function verificarEmail(Request $request)
    {
        $empresa = empresa::where('email', $request->email)
            ->first();

        if ($empresa) {
            return 0;
        } else {
            return 1;
        }
    }
}
