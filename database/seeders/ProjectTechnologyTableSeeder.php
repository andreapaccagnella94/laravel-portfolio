<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // recupeo progetti e tecnologie
        $projects = Project::all();
        $technologies = Technology::all();

        // associo casualmente tecnologie al progetto
        $projects->each(function ($project) use ($technologies) {
            $project->technologies()->attach($technologies->random(rand(1, 3))->pluck("id")->toArray());
        });
    }
}
