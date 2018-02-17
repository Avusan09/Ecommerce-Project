<?php

use Faker\Generator as Faker;


$factory->define(App\Product::class, function (Faker $faker)
{

    $dir= '/products/';
    $url = Voyager::image($dir);



    return [
        'Title' => $faker->name,
        'description' => $faker->realText(200,2),
        'price' => $faker->numberBetween(1000,1000000), // secret
        'image' => $faker->image('public/storage/products/',400,300, null, false),
        'gallery' => 'https://dummyimage.com/wuxga',
        'keywords' => $faker->randomElement($array = array ('Mobile', 'Laptop')),
        'featured' => $faker->boolean(50),
        'category_id' => $faker->numberBetween(2,3),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
        'is_banner' => $faker->boolean(10),
        'brand' => $faker->randomElement($array = array ('Samsung','Xiomi ','Lenovo', 'Acer','Nokia')),

    ];
});
