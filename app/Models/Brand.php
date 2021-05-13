<?php
namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;
class Brand extends Model
{
    protected $table = "brands";

    protected $fillable = ['name', 'reference','brand_image'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}