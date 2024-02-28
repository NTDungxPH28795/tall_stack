<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;


class Product extends Component
{
    
    #[Title('Product')]

    public function render()
    {
        return view('livewire.product');
    }
}
