<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory()
            ->count(10)
            ->state(new Sequence(
                fn ($sequence) => ['parent_id' => Category::select('id')->pluck('id')->random()],
            ))
            ->create();
    }
}
