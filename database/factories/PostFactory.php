<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id'    => 1,
        'heading'    => $faker->word,
        'image'      => $faker->image(('public/post_images'),400,300),
        'title'      => $faker->username,
        'description'=> $faker->text($maxNbChars = 400),
        'status'     => 1
    ];
});
