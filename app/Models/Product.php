<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'product';

//    protected $fillable = ['name', 'amount', 'price', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'amount', 'price'];
}
