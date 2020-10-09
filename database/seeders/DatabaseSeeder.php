<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\CategoryPost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Student::factory(10)->create();
        Teacher::factory(10)->create();
        Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();
        // đẩy dữ liệu
        // $this->call([
        //     StudentTableSeeder::class,
        //     TeacherTableSeeder::class,
        // ]);
    }
}
