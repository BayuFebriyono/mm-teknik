<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

#[Layout('components.layouts.sidebar')]
#[Title('Product')]
class ProductController extends Component
{
    use WithFileUploads;

    public $isAddData = false;
    public $isEditData = false;
    public $categoryId = null;
    public $product = '';
    public $price = '';
    public $deskripsi = '';
    public $urlPhoto = null;
    public $productId = null;

    public function render()
    {
        return view('livewire.admin.product-controller', [
            'products' => Product::with('category')->get(),
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
        $this->categoryId = null;
        $this->product = '';
        $this->price = '';
        $this->deskripsi = '';
        $this->urlPhoto = null;
        $this->productId = null;
        $this->isEditData = false;
    }

    public function store()
    {
        if ($this->urlPhoto) {
            $lokasiGambar = Storage::disk('public_uploads')->put('Foto_Produk', $this->urlPhoto);
        }

        Product::create([
            'category_id' => $this->categoryId,
            'product' => $this->product,
            'price' => $this->price,
            'deskripsi' => $this->deskripsi,
            'url_photo' => $lokasiGambar
        ]);

        $this->cancel();
    }

    public function edit($id)
    {
        $this->isEditData = true;
        $data = Product::find($id);


        $this->categoryId = $data->category_id;
        $this->product = $data->product;
        $this->price = $data->price;
        $this->deskripsi = $data->deskripsi;
        // $this->urlPhoto = $data->url_photo;
        $this->productId = $data->id;
    }

    public function update()
    {

        if ($this->urlPhoto) {
            $lokasiGambar = Storage::disk('public_uploads')->put('Foto_Produk', $this->urlPhoto);
            $data = [
                'category_id' => $this->categoryId,
                'product' => $this->product,
                'price' => $this->price,
                'deskripsi' => $this->deskripsi,
                'url_photo' => $lokasiGambar
            ];
        } else {

            $data = [
                'category_id' => $this->categoryId,
                'product' => $this->product,
                'price' => $this->price,
                'deskripsi' => $this->deskripsi,

            ];
        }

        Product::where('id', $this->productId)
            ->update($data);
        $this->cancel();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    }


}
