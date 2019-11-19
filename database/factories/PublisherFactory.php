<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-11-14T13:20:49+00:00
# @Filename: PublisherFactory.php
# @Last modified by:   mo
# @Last modified time: 2019-11-14T13:22:51+00:00




/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publisher;
use Faker\Generator as Faker;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address
    ];
});
