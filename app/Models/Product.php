<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $guarded =['id'];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function category(){
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
}
