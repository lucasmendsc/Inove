<?php

namespace App\ViewModels;

use App\Models\Cliente;
use Spatie\ViewModels\ViewModel;
use App\Http\Controllers\ClienteController;

class ClienteViewModel extends ViewModel
{

    public $cliente;

    public $indexUrl = null;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;

        $this->indexUrl = action([ClienteController::class, 'index']);
    }

    public function cliente(): Cliente
    {
        return $this->cliente ?? new Cliente();
    }

}
