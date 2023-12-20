<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.home')]
class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home.home-component');
    }

}
