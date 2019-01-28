<?php

namespace AlexWells\FakerAdorableAvatars;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerAdorableLaravelProvider extends ServiceProvider
{
    /**
     * Automatically add our Faker provider to Laravel applications.
     */
    public function register() {
        $this->app->resolving(Generator::class, function (Generator $faker) {
            $faker->addProvider(new Adorable($faker));
        });
    }
}