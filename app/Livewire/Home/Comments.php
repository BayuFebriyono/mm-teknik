<?php

namespace App\Livewire\Home;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Comments extends Component
{
    use WithFileUploads;


    public $comments =[];

    public function mount(){
        $this->comments = Comment::where('show', true)->get();
    }
    public function render()
    {
        return view('livewire.home.comments');
    }

}
