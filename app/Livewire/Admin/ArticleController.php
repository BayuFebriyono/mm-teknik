<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

#[Layout('components.layouts.sidebar')]
#[Title('Article')]
class ArticleController extends Component
{
    use WithFileUploads;

    public $title = '';
    public $category = '';
    public $photo = null;
    public $content = '';
    public $articleId = null;
    public $isAddData = false;
    public $isEditData = false;

    public function render()
    {
        return view('livewire.admin.article-controller', [
            'articles' => Article::all()
        ]);
    }

    public function addData()
    {
        $this->isAddData = true;
    }

    public function cancel()
    {

        $this->title = '';
        $this->category = '';
        $this->photo = null;
        $this->content = '';
        $this->articleId = null;
        $this->isAddData = false;
        $this->isEditData = false;
    }

    public function store()
    {
        $this->validate([
            'photo' => 'required|image'
        ]);

        $manager = new ImageManager(Driver::class);
        $image = $manager->read($this->photo);
        $image->cover(1024, 576);
        $encoded = $image->toJpeg();
        $filename = time() . '.' . $this->photo->extension();
        $encoded->save(public_path('uploads/gambar/' . $filename));

        Article::create([
            'title' => $this->title,
            'category' => $this->category,
            'photo' => 'gambar/' . $filename,
            'content' => $this->content
        ]);

        $this->cancel();
    }

    public function edit($id)
    {
        $this->isEditData = true;
        $data = Article::find($id);

        $this->title = $data->title;
        $this->category = $data->category;
        $this->content = $data->content;
        $this->articleId = $data->id;
    }

    public function update()
    {
        $article = Article::find($this->articleId);
        if ($this->photo) {
            $this->validate([
                'photo' => 'image'
            ]);
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($this->photo);
            $image->cover(1024, 576);
            $encoded = $image->toJpeg();
            $filename = time() . '.' . $this->photo->extension();
            $encoded->save(public_path('uploads/gambar/' . $filename));

            try {
                unlink('uploads/' . $article->photo);
            } catch (Exception $e) {
            }

            $data = [
                'title' => $this->title,
                'category' => $this->category,
                'photo' => 'gambar/' . $filename,
                'content' => $this->content
            ];
        } else {
            $data = [
                'title' => $this->title,
                'category' => $this->category,
                'content' => $this->content
            ];
        }

        $article->update($data);
        $this->cancel();
    }

    public function delete($id){
        Article::find($id)->delete();
    }
}
