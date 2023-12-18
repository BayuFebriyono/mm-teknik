<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.sidebar')]
#[Title('Product')]
class ProductController extends Component
{
    public function render()
    {
        return view('livewire.admin.product-controller');
    }
}
