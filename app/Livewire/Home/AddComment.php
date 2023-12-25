<?php

namespace App\Livewire\Home;

use App\Models\Comment;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\WithFileUploads;

class AddComment extends Component
{
    use WithFileUploads;
    public $comment = '';
    public $photo = null;
    public $name = '';


    public function render()
    {
        return view('livewire.home.add-comment');
    }

    public function storeComment()
    {
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($this->photo);
        $image->cover(250, 250);
        $encoded = $image->toJpeg();
        $filename = time() . '.' .  $this->photo->extension();
        $encoded->save(public_path('uploads/gambar/' . $filename));

        Comment::create([
            'name' => $this->name,
            'comment' => $this->comment,
            'photo' => 'gambar/' . $filename
        ]);

        session()->flash('success', 'Data ditambahkan');
    }
}
