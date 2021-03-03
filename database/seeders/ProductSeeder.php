<?php
namespace Database\Seeders;

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

        for ($i=0; $i<50; $i++){
            $objProduct = $objProduct->create([
                'name' => 'name' . $i,
                'amount' => mt_rand(1, 10),
                'price' => mt_rand(1000, 50000),
            ]);

            $objProduct->addMedia(public_path('img/product.jpg'))->preservingOriginal()->toMediaCollection('img');
            $objProduct->save();
        }
    }
}
