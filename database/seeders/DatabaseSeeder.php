<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tag::factory(2)->create();
        \App\Models\FirstModel::factory(1)->create();

        \App\Models\FirstModel::first()->taggable()->attach(\App\Models\Tag::first());
    }
}
