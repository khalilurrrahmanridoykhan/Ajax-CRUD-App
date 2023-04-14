<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for($i =1; $i<=100; $i++){
            $product = new Product();
            $product->name = $faker->name;
            $product->price = $faker->randomDigit;
            $product->save();
        }
    }
}
