<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technoogies = [
            'php',
            'html',
            'css',
            'js',
            'react',
            'laravel',
        ];

        foreach ($technoogies as $type) {
            $newTechnology = new Technology();

            $newTechnology->name = $type;

            $newTechnology->save();
        }
    }
}
