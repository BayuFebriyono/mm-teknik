<?php

namespace App\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\WithFileUploads;

#[Layout('components.layouts.sidebar')]
#[Title('Comment')]
class CommentController extends Component
{
    use WithFileUploads;

    public $name = '';
    public $photo = null;
    public $comment = '';
    public $commentId = null;
    public $isAddData = false;
    public $isEditData = false;

    public function render()
    {
        return view('livewire.admin.comment-controller', [
            'comments' => Comment::all()
        ]);
    }

    public function addData()
    {
        $this->isAddData = true;
    }

    public function cancel()
    {
        $this->name = '';
        $this->photo = null;
        $this->comment = '';
        $this->commentId = null;
        $this->isAddData = false;
        $this->isEditData = false;
    }

    public function store()
    {
        if ($this->photo) {

            $manager = new ImageManager(Driver::class);
            $image = $manager->read($this->photo);
            $image->cover(250, 250);
            $encoded = $image->toJpeg();
            $filename = time() . '.' . $this->photo->extension();
            $encoded->save(public_path('uploads/gambar/' . $filename));
        }
        Comment::create([
            'name' => $this->name,
            'photo' => 'gambar/' . $filename,
            'comment' => $this->comment,
        ]);
        $this->cancel();
    }

    public function edit($id)
    {
        $this->isEditData = true;
        $data = Comment::find($id);

        $this->name = $data->name;
        $this->comment = $data->comment;
        $this->commentId = $data->id;
    }

    public function update()
    {
        if ($this->photo) {

            $manager = new ImageManager(Driver::class);
            $image = $manager->read($this->photo);
            $image->cover(250, 250);
            $encoded = $image->toJpeg();
            $filename = time() . '.' . $this->photo->extension();
            $encoded->save(public_path('uploads/gambar/' . $filename));

            $data = [
                'name' => $this->name,
                'photo' => 'gambar/' . $filename,
                'comment' => $this->comment,
            ];

        }else{
            $data = [
                'name' => $this->name,
                'comment' => $this->comment,
            ];
        }

        Comment::where('id', $this->commentId)
            ->update($data);

        $this->cancel();
    }

    public function delete($id){
        Comment::find($id)->delete();
    }

    public function showComment($id){
        Comment::find($id)->update([
            'show' => true
        ]);
    }

    public function hideComment($id){
        Comment::find($id)->update([
            'show' => false
        ]);
    }
}
