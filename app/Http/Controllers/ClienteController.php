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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new cliente();

        $cliente->nome = "nome";
        $cliente->cpf = "cpf";
        $cliente->senha = "senha";
        $cliente->email = "email";
        $cliente->saldo = 6.32;

        $viewModel = new ClienteViewModel(
            $cliente
        );

        return view('index', $viewModel);
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
    public function update(Request $request)
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
