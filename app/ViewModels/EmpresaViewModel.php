<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use App\Models\Empresa;
use App\Http\Controllers\EmpresaController;

class EmpresaViewModel extends ViewModel
{
    public $empresa;

    public $indexUrl = null;

    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;

        $this->indexUrl = action([EmpresaController::class, 'index']);
    }

    public function empresa(): empresa
    {
        return $this->empresa ?? new empresa();
    }
}
