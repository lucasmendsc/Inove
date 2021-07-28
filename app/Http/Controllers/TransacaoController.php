<?php

namespace App\Http\Controllers;

use App\Mail\ClienteEmail;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Transacao;
use App\ViewModels\TransacaoViewModel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class TransacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacoes =  Transacao::all();

        return view('transacao/index', new TransacaoViewModel($transacoes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $transacao = new Transacao();

        $transacao->id_cliente = $request->id_cliente;
        $transacao->id_produto =  $request->id_produto;
        $transacao->valor =  $request->quantidade;
        $transacao->save();
        $this->finalizarTransacao($transacao);
    }

    private function finalizarTransacao(Transacao $transacao)
    {
        $id_cliente = $transacao->id_cliente;
        $id_produto = $transacao->id_produto;

        $cliente = Cliente::where('id', $id_cliente)
            ->first();

        $cliente->saldo -= $transacao->valor;

        $produto = Produto::where('id', $id_produto)
            ->first();

        $produto->quantidade -= $transacao->valor;

        $cliente->update();
        $produto->update();
        $this->enviarEmail($cliente->email);
    }

    public function enviarEmail($email)
    {

        Mail::to($email)->send(new ClienteEmail());
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
        $transacao = Transacao::where('id', 2)
            ->first();

        return $transacao;
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
        $transacao = Transacao::where('id', $request->id)
            ->first();

        $transacao->id_cliente = 1;
        $transacao->id_produto = 1;
        $transacao->valor = 1.23;

        $transacao->id_cliente = $request->id_cliente;;
        $transacao->id_produto = $request->id_produto;
        $transacao->valor = $request->valor;

        $transacao->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $transacao = Transacao::where('id', $request->id)
            ->first();

        $transacao->delete();
    }

    public function relatorio()
    {
        $pdf = App::make('dompdf.wrapper');
        $transacoes = Transacao::all();
        $pdf = PDF::loadView('transacao/relatorioVenda', compact('transacoes'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }

    public function filtrar(Request $request)
    {
        $dataInicial = $request->de;
        $dataFinal = $request->ate;

        $transacoes =  Transacao::whereBetween('created_at', [$dataInicial,$dataFinal])
            ->get();

        return view('transacao/relatorioVenda', new TransacaoViewModel($transacoes));
    }
}
