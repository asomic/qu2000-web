<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image' =>url('/images/logo.png'),
        'featured' =>$faker->boolean(15),
        'code' => Str::random(6),
        'category_id' => Category::all()->random()->id ?? 1,
    ];
});
