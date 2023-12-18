<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.sidebar')]
#[Title('Category')]
class CategoryController extends Component
{

    public $isAddData = false;
    public $isEditData = false;
    public $categoryId = null;
    public $kategori = '';
    public $deskripsi = '';

    public function render()
    {
        return view('livewire.admin.category-controller', [
            'categories' => Category::all()
        ]);
    }

    public function addData()
    {
        $this->isAddData = true;
    }

    public function cancel()
    {
        $this->isAddData = false;
        $this->isEditData = false;
        $this->categoryId = null;
        $this->kategori = '';
        $this->deskripsi = '';
    }

    public function store()
    {
        $this->validate([
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        Category::create([
            'kategori' => $this->kategori,
            'deskripsi' => $this->deskripsi
        ]);

        $this->cancel();
    }

    public function edit($id)
    {
        $data = Category::find($id);
        $this->categoryId = $data->id;
        $this->isEditData = true;
        $this->kategori = $data->kategori;
        $this->deskripsi = $data->deskripsi;
    }

    public function update()
    {
        Category::where('id', $this->categoryId)->update([
            'kategori' => $this->kategori,
            'deskripsi' => $this->deskripsi
        ]);

        $this->cancel();
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
    }
}
