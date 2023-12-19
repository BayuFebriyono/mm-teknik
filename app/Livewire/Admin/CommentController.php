<?php

namespace App\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.sidebar')]
#[Title('Category')]
class CommentController extends Component
{

    public $name ='';
    public $photo = null;
    public $star = '';
    public $comment ='';
    public $commentId = null;
    public $isAddData = false;
    public $isEditData = false;

    public function render()
    {
        return view('livewire.admin.comment-controller',[
            'comments' => Comment::all()
        ]);
    }
}
