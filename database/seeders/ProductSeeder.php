<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Color;
use App\Models\Condition;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->hasAttached(
                Product::factory()
                    ->count(3)
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id];
                    }))
            ->create();
    }
}
