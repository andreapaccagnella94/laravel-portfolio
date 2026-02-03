<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
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
        // prendo tutti i tipi
        $types = Type::all();

        for ($i = 0; $i < 20; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->cliente = $faker->company();
            $newProject->periodo = $faker->dateTime();
            $newProject->riassunto = $faker->paragraph(20);
            $newProject->type_id = $types->pluck("id")->random();

            $newProject->save();
        }
    }
}
