<?php

use Illuminate\Database\Seeder;
use App\Supplier;
class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $total = 20;
        $faker = Faker::create('zh_TW');

        foreach (range(1, $total) as $index) {
            Supplier::create([
                'id'   => $faker->realText(10),
                'name'   => $faker->name,

                'POC' => $faker->userName,
                'contact' => $faker->word,
                'postal' => $faker->realText(5),
                'address' => $faker->address,

                'phone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'cellphone' => $faker->phoneNumber,
                'TaxID' => $faker->realText(5),
                'email' => $faker->email,


                'created_at' => Carbon::now()->subDays($total - $index),
                'updated_at' => Carbon::now()->subDays($total - $index)->addHours(rand(1, 24)),
            ]);
        }
    }
}
