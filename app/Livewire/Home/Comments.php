<?php

namespace App\Livewire\Home;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public function render()
    {
        return view('livewire.home.comments',[
            'comments' => Comment::all()
        ]);
    }
}
