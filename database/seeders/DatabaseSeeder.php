<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use App\Models\Proposal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory()->count(200)->create();

       User::query()->inRandomOrder()->limit(10)->get()
       ->each(function ($user) {
           $project =   Project::factory()->create(['create_by' => $user->id]);
           Proposal::factory()->count(5)->create(['project_id' => $project->id]);
       });
    }
}
