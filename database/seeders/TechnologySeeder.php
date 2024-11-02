<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Alltechnologies = [
            'frontend',
            'backend',
            'software',
            'hardware',
            'framework',
        ];

        foreach ($Alltechnologies as $Singletechnology) {
            $technology = Technology::create([
                'name' => $Singletechnology,
            ]);
        }
    }
}
