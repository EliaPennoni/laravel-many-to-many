<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

// models
use App\Models\project;
use App\Models\Type;
use App\Models\technology;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence(3);

            $randomType = Type::inRandomOrder()->first();

            $project = Project::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'price' => $faker->randomFloat(2, 1, 999),
                'description' => $faker->paragraph(),
                'image' => $faker->imageUrl(640, 480, 'projects', true),
                'type_id' => $randomType->id,
            ]);

            $technologyId = [];
            for ($j = 0; $j < rand(0, Technology::count()); $j++) {

                $randomTechnology = Technology::inRandomOrder()->first();
                if (!in_array($randomTechnology->id, $technologyId)) {
                    $technologyId[] = $randomTechnology->id;
                }

            }

            $project->technologies()->sync($technologyId);
        }
    }


}
