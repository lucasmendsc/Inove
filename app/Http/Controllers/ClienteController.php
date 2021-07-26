<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\ViewModels\ClienteViewModel;
use Illuminate\Foundation\Auth\User;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes =  Cliente::all();

        return view('cliente/index', new ClienteViewModel($clientes));
    }

    public function editar(Request $request)
    {
        $cliente = Cliente::where('id', $request->id)
            ->first();

        $clientes[0] =  $cliente;

        return view('cliente/editar', new ClienteViewModel($clientes));
    }

    public function cadastrar()
    {
        return view('cliente/cadastro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente = new cliente();

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->senha = $request->senha;
        $cliente->email = $request->email;
        $cliente->saldo = 100;

        $cliente->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $cliente = Cliente::where('nome', "nome")
            ->first();

        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $cliente = Cliente::where('id', $request->id)
            ->first();

        $cliente->nome = $request->nome;;
        $cliente->cpf = $request->cpf;
        $cliente->senha = $request->senha;
        $cliente->email = $request->email;
        $cliente->saldo = $request->saldo;

        $cliente->update();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    }

    public function logar(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        $cliente = Cliente::where('email', $email)
            ->where('senha', $senha)
            ->first();

        if (isset($cliente)) {
            return $cliente->id;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $cliente = Cliente::where('id', $request->id)
            ->first();

        $cliente->delete();
    }
}
