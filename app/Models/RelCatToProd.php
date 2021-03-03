<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RelCatToProd extends Model
{
    protected $table = 'rel_product_to_category';
    protected $fillable = ['product_id', 'category_id'];

}
