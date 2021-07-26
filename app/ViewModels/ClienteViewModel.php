<?php

namespace App\ViewModels;

use App\Models\Cliente;
use Spatie\ViewModels\ViewModel;
use App\Http\Controllers\ClienteController;

class ClienteViewModel extends ViewModel
{

    public $clientes;

    public function __construct($arr)
    {
        $this->clientes = $arr;

        $this->indexUrl = action([ClienteController::class, 'index']);
    }
}
