<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProdukComponent extends Component
{

    public $products = null;
    public $categoryId = null;

    public function mount()
    {
        if ($this->categoryId) {
            $this->products = Product::where('category_id', $this->categoryId)->with('category')->get();
        } else {
            $this->products = Product::with('category')->get();
        }
    }

    public function render()
    {
        return view(
            'livewire.home.produk-component',
            [
                'categories' => Category::all()
            ]
        );
    }

    public function selectCategory($id = null)
    {
        $this->categoryId = $id;
        if($this->categoryId){
            $this->products = Product::where('category_id', $this->categoryId)->with('category')->get();
        }else{
            $this->products = Product::with('category')->get();
        }
    }
}
