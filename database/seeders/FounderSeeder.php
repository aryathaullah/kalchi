<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    public function run(): void
    {
        Founder::updateOrCreate([
            'name' => 'Aditya Pratama',
            'position' => 'Co-Founder & CEO',
            'bio' => 'Responsible for leading the company vision, business strategy, and overall development of Kal-Chi.',
            'photo' => null,
        ]);

        Founder::updateOrCreate([
            'name' => 'Nadine Putri',
            'position' => 'Co-Founder & Product Development',
            'bio' => 'Focuses on product innovation, recipe development, and maintaining the quality of Kal-Chi products.',
            'photo' => null,
        ]);

        Founder::updateOrCreate([
            'name' => 'Kevin Wijaya',
            'position' => 'Co-Founder & Marketing',
            'bio' => 'Responsible for brand development, marketing strategies, and building customer relationships.',
            'photo' => null,
        ]);

        Founder::updateOrCreate([
            'name' => 'Michelle Tan',
            'position' => 'Co-Founder & Operations',
            'bio' => 'Oversees daily operations, production processes, and coordination to ensure business efficiency.',
            'photo' => null,
        ]);

        Founder::updateOrCreate([
            'name' => 'Rafael Santoso',
            'position' => 'Co-Founder & Finance',
            'bio' => 'Manages financial planning, budgeting, and financial sustainability to support business growth.',
            'photo' => null,
        ]);
    }
}