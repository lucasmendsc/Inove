<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ProdutoViewModel extends ViewModel
{
    public $produtos;

    public function __construct($arr)
    {
        $this->produtos = $arr;
    }
}
