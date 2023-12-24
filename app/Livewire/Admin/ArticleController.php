<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layout.sidebar')]
#[Title('Article')]
class ArticleController extends Component
{
    public function render()
    {
        return view('livewire.admin.article-controller');
    }
}
