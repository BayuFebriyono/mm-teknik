<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CategoryController extends Component
{
    #[Layout('components.layouts.sidebar')]
    public function render()
    {
        return view('livewire.admin.category-controller');
    }
}
