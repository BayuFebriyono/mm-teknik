<?php

namespace App\Livewire\Home;

use App\Models\Article;
use Livewire\Component;

class ArticleComponent extends Component
{
    public function render()
    {
        return view('livewire.home.article-component',[
            'articles' => Article::latest()->limit(6)->get()
        ]);
    }
}
