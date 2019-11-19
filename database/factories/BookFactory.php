<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-19T14:10:23+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-19T14:25:15+00:00




/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'author' => $faker->name,
        'year' => $faker->year($max = 'now'),
        'isbn' => $faker->unique()->isbn13,
        'price' => $faker->randomFloat(2, 5, 100)
    ];
});
