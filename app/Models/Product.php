<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'product';

    protected $fillable = ['name', 'amount', 'price'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'rel_product_to_category');
    }
}
