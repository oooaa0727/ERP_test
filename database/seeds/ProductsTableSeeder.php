<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Supplier;
use Faker\Factory as Faker;
use Carbon\Carbon;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $total = 20;
        $faker = Faker::create('zh_TW');
        $data=[];
        foreach (range(1, $total) as $index) {
Product::create([

    'pid'=> random_int(001,1000),
    'name'=>$faker->name,
    'spec'=>$faker->name,
            'unit'=>$faker->name,
            'purchasePR' =>random_int(10,40),
            'salesPR' =>random_int(50,100),
            'sid'=>random_int(001,1000),
            'inventory'=>random_int(0,50),
            'safeStock'=>random_int(20,40),
                'discontinued' => Carbon::now()->subDays($total - $index),


                'created_at' => Carbon::now()->subDays($total - $index),
                'updated_at' => Carbon::now()->subDays($total - $index)->addHours(rand(1, 24)),
            ]);


    }
}
}
