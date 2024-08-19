<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // get the first user

        Post::create([
            'title' => 'First post',
            'content' => 'This is the content of the first post.',
            'author' => $user->id,
            'publishDate' => now(),
            'cover' => file_get_contents(public_path('../public/images/suit.jpg')),
        ]);

        // Add more posts as needed...
    }
}