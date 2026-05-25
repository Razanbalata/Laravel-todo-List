<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Learn Laravel Basics',
            'description' => 'Understand routes, controllers and models',
            'is_completed' => false,
            'user_id' => 1
        ]);

        Task::create([
            'title' => 'Build ToDo App',
            'description' => 'Create full CRUD system',
            'is_completed' => false,
            'user_id' => 1
        ]);

        Task::create([
            'title' => 'Practice PHP',
            'description' => 'Improve backend skills',
            'is_completed' => true,
            'user_id' => 1
        ]);
    }
}
