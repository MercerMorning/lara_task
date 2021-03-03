<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\RelCatToProd;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objProduct = new Product();

        for ($i=0; $i<10; $i++){
            $objProduct = $objProduct->create([
                'name' => 'name' . $i,
                'amount' => mt_rand(1, 10),
                'price' => mt_rand(1000, 50000),
            ]);
            $objProduct->save();
            $objProduct->addMedia(public_path('img/product.jpg'))->preservingOriginal()->toMediaCollection('img');
            for ($j=0; $j<mt_rand(1, 5); $j++){
                $objProduct->addMedia(public_path('img/other.jpg'))->preservingOriginal()->toMediaCollection('other_images');
            }




            for ($q=0; $q<mt_rand(1, 5); $q++) {

                $randomCategoryId = collect(Category::all()->pluck('id'))->random();

                $relCatToProd = new RelCatToProd();
                $relCatToProd = $relCatToProd->create([
                    'product_id' => $objProduct->id,
                    'category_id' => $randomCategoryId,
                ]);
                $relCatToProd->save();
            }

        }
    }
}
