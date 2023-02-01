<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'title' => 'Implement feature A',
            'tag' => 1,
        ]);
        Task::create([
            'title' => 'Unit test for feature A',
            'tag' => 2,
        ]);
        Task::create([
            'title' => 'Implement feature B',
            'tag' => 1,
        ]);
    }
}
