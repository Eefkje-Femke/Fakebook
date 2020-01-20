<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'id' =>$faker->unique()->randomNumber(),
        'title' => 'This is a title',
        'body' => $faker->text,
        'cover_image' => 'image.jpg',
        'user_id' => $faker->randomNumber(),
    ];
});
