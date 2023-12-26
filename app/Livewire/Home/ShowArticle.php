<?php

namespace App\Livewire\Home;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.home')]
class ShowArticle extends Component
{
    public $article = null;

    public function mount($id)
    {
        $this->article = Article::find($id);
    }
    public function render()
    {
        return view('livewire.home.show-article');
    }
}
