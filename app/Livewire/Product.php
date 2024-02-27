<?php

namespace App\Livewire;

use Livewire\Component;


class Product extends Component
{
    
    // public function goToProductPage()
    // {
    //     return redirect()->to('/product');
    // }

    public function render()
    {
        return view('livewire.product');
    }
}
