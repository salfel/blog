<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Paragraph;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $user = User::factory()->create();

        foreach(range(1, 2) as $i) {
            $blog = Blog::factory()->create([
                'author_id' => $user->id
            ]);

            foreach(range(1, 5) as $j) {
                Paragraph::factory()->create([
                    'blog_id' => $blog->id,
                    'order' => $j
                ]);
            }
        }

    }
}
