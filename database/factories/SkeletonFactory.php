<?php

namespace MacsiDigital\Skeleton\Database\Factories;

use MacsiDigital\Skeleton\Models\Skeleton;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SkeletonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skeleton::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [

            ];
        });
    }
}
