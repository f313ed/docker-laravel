<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Coding',
        ]);
        Tag::create([
            'name' => 'Unit Test',
        ]);
        Tag::create([
            'name' => 'Requirement',
        ]);
    }
}
