<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PrioritySeeder extends Seeder
{
    public function run(): void
    {
        $priorities = [
            'High',
            'Medium',
            'Low'
        ];

        foreach ($priorities as $priority) {
            Priority::create([
                'name' => $priority
            ]);
        }
    }
}