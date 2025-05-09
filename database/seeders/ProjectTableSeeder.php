<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->sentence(3);
            $newProject->type_id = rand(1, 6);
            $newProject->client = $faker->company;
            $newProject->period = $faker->monthName . ' ' . $faker->year;
            $newProject->description = $faker->paragraphs(12, true);

            $newProject->save();
        }
    }
}
