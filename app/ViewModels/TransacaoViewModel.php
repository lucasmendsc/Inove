<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use App\Models\Transacao;
use App\Http\Controllers\TransacaoController;

class TransacaoViewModel extends ViewModel
{
    public $transacao;

    public $indexUrl = null;

    public function __construct(Transacao $transacao)
    {
        $this->transacao = $transacao;

        $this->indexUrl = action([TransacaoController::class, 'index']);
    }

    public function transacao(): Transacao
    {
        return $this->transacao ?? new Transacao();
    }
}
