<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\tags;
use App\Models\post_tag;
use App\Models\images;
use App\Models\categori;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(100)->create();
        tags::factory(100)->create();
        post::factory(100)->create();
        post_tag::factory(100)->create();
        images::factory(100)->create();
        categori::factory(100)->create();
    }
}
