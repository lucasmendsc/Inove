<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use App\Models\Empresa;
use App\Http\Controllers\EmpresaController;

class EmpresaViewModel extends ViewModel
{
    public $empresas;
    public $indexUrl;

    public function __construct($arr)
    {
        $this->empresas = $arr;

        $this->indexUrl = action([EmpresaController::class, 'index']);
    }
}
