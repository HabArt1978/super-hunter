<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->has(Employer::factory(1)->has(Job::factory(3)->has(Tag::factory(5))))->create();
    }
}
