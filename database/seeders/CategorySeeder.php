<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Data Science',
            'slug' => 'data-science',
        ]);

        Category::factory()->create([
            'name' => 'Network Security',
            'slug' => 'network-security',
        ]);
    }
}
