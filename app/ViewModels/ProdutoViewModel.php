<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use App\Models\Produto;
use App\Http\Controllers\ProdutoController;

class ProdutoViewModel extends ViewModel
{
    public $produto;

    public $indexUrl = null;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;

        $this->indexUrl = action([ProdutoController::class, 'index']);
    }

    public function produto(): Produto
    {
        return $this->produto ?? new Produto();
    }
}
