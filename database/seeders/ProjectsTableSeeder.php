<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importiamo i Faker
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->cliente = $faker->company();
            $newProject->periodo = $faker->dateTime();
            $newProject->riassunto = $faker->paragraph(6);

            $newProject->save();
        }
    }
}
