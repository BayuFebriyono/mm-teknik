<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\WithFileUploads;

#[Layout('components.layouts.sidebar')]
class ArticleAdd extends Component
{
    use WithFileUploads;
    public $title = '';
    public $category = '';
    public $photo = null;
    public $content = '';

    public function render()
    {
        return view('livewire.admin.article-add');
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

        return $this->redirect('/article', navigate: true);
    }
}
