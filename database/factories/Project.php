<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Project;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    
    $title = $faker -> sentence;
    return [
        'title' => $title,
        'hint' => $title,
        'description' => $faker->text,
        'mainImage' => $faker->image('public/projectimages',640,480, null, false),
        'category_id' => function() {
            return Category::all()->random();
        },
    ];

});
