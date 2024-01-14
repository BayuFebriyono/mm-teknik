<?php

namespace App\Livewire\Admin;

use Exception;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

#[Layout('components.layouts.sidebar')]
class ArticleEdit extends Component
{
    use WithFileUploads;
    public $title = '';
    public $category = '';
    public $photo = null;
    public $content = '';
    public $articleId = null;

    public function mount($id)
    {
        $article = Article::find($id);
        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->category = $article->category;
        $this->content = $article->content;
    }

    public function render()
    {
        return view('livewire.admin.article-edit');
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
        return $this->redirect('/article', navigate:true);
    }
}
