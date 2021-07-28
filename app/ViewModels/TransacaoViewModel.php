<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use App\Models\Transacao;
use App\Http\Controllers\TransacaoController;

class TransacaoViewModel extends ViewModel
{
    public $transacoes;

    public function __construct($transacoes)
    {
        $this->transacoes = $transacoes;

    }
}
