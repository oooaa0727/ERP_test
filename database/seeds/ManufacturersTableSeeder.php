<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::truncate();

        $total = 20;
        $faker = Faker::create('zh_TW');
        $data=[];
        foreach (range(1, $total) as $index) {
            Manufacturer::create([
                'mid'   => random_int(001,1000),
                'name'   => $faker->name,

                'POC' => $faker->userName,
                'contact' => $faker->word,
                'postal' => $faker->word,
                'address' => $faker->address,

                'phone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'cellphone' => $faker->phoneNumber,
                'TaxID' => $faker->word,
                'email' => $faker->email,


                'created_at' => Carbon::now()->subDays($total - $index),
                'updated_at' => Carbon::now()->subDays($total - $index)->addHours(rand(1, 24)),
            ]);
        }

        $manufacturers = $this->table('manufacturers');

        $manufacturers->insert($data)->save();
    }
}
