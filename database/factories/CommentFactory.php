<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
    	'post_id' =>$faker->numberBetween(1,10),
      	'comment' => $faker->text(20),
    ];
});
