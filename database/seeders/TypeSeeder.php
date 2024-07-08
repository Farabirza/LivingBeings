<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    private $types = [
        'bird', 'mammal', 'fish', 'insect'
    ];

    public function run(): void
    {
        foreach($this->types as $val) {
            Type::create([
                'name' => $val,
                'description' => fake()->sentence,
            ]);
        }
    }
}
