<?php
namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name', 'brand', 'size', 'comments', 'boarding_date', 'quantity_stock', 'brand_id','product_image',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
