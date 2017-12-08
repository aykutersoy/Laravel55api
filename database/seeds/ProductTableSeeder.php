<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();

    	Product::create([
    		'name' => 'Chromebook',
    		'price' => 24999,
    		'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now()),
    		'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
        ]);
        Product::create([
            'name' => 'Chromecast',
            'price' => 3000,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now()),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
        ]);
    }
}
