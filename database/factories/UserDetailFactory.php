<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetail>
 */
class UserDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $userID = 0;
        $userID++;
        return [
            'userID' => $userID,
            //'avatarID' => 1,
            //'categoryID' => 1,
            'roleID' => rand(1,3),
            //'regionID' => rand(1,3)
        ];
    }
}
