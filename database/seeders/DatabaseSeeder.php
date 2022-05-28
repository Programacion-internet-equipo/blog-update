<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        Category::factory(4)->create();
        Tag::factory(8)->create();
        Image::factory(10)->create();
    }
}
