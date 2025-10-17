<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TagsSeeder::class);

        User::factory(10)->has(Employer::factory(1)->has(Job::factory(3)))->create();

        $jobs = Job::all();
        $tags = Tag::all();

        foreach ($jobs as $job) {
            $randomTags = fake()->randomElements($tags, 3);
            foreach ($randomTags as $tag) {
                $job->tags()->attach($tag);
            }
        }
    }
}
