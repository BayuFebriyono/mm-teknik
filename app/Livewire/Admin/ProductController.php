<?php

namespace App\Livewire\Admin;

use Exception;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;


#[Layout('components.layouts.sidebar')]
#[Title('Product')]
class ProductController extends Component
{
    use WithFileUploads;

    public $isAddData = false;
    public $isEditData = false;
    public $categoryId = null;
    public $product = '';
    public $showPrice = [];
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
        $this->showPrice = [];
    }

    public function store()
    {
        if ($this->urlPhoto) {

            $manager = new ImageManager(Driver::class);
            $image = $manager->read($this->urlPhoto);
            $image->cover(250, 250);
            $encoded = $image->toJpeg();
            $filename = time() . '.' . $this->urlPhoto->extension();
            $encoded->save(public_path('uploads/gambar/' . $filename));
        }

        Product::create([
            'category_id' => $this->categoryId,
            'product' => $this->product,
            'price' => $this->price,
            'show_price' => $this->showPrice[0] ?? false,
            'deskripsi' => $this->deskripsi,
            'url_photo' => 'gambar/' . $filename
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
       if( $data->show_price == 1) array_push($this->showPrice, 1);
    }

    public function update()
    {
        $product = Product::find($this->productId);

        if ($this->urlPhoto) {
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($this->urlPhoto);
            $image->cover(250, 250);
            $encoded = $image->toJpeg();
            $filename = time() . '.' . $this->urlPhoto->extension();
            $encoded->save(public_path('uploads/gambar/' . $filename));
            try {
                unlink('uploads/' . $product->url_photo);
            } catch (Exception $e) {
            }
            $data = [
                'category_id' => $this->categoryId,
                'product' => $this->product,
                'price' => $this->price,
                'show_price' => $this->showPrice[0] ?? false,
                'deskripsi' => $this->deskripsi,
                'url_photo' => 'gambar/' . $filename
            ];
        } else {

            $data = [
                'category_id' => $this->categoryId,
                'product' => $this->product,
                'price' => $this->price,
                'show_price' => $this->showPrice[0] ?? false,
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
