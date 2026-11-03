<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    public function run(): void
    {
        Founder::updateOrCreate([
            'name' => 'Alexa',
            'position' => 'Co-Founder & CEO',
            'bio' => 'Responsible for leading the company vision, business strategy, and overall development of Kal-Chi.',
            'photo' => "public/image/founder/alexa.jpeg",
        ]);

        Founder::updateOrCreate([
            'name' => 'Regine ',
            'position' => 'Co-Founder & Product Development',
            'bio' => 'Focuses on product innovation, recipe development, and maintaining the quality of Kal-Chi products.',
            'photo' => "public/image/founder/regine.jpeg",
        ]);

        Founder::updateOrCreate([
            'name' => 'Varleen',
            'position' => 'Co-Founder & Marketing',
            'bio' => 'Responsible for brand development, marketing strategies, and building customer relationships.',
            'photo' => "public/image/founder/varleen.jpeg",
        ]);

        Founder::updateOrCreate([
            'name' => 'Maria',
            'position' => 'Co-Founder & Operations',
            'bio' => 'Oversees daily operations, production processes, and coordination to ensure business efficiency.',
            'photo' => "public/image/founder/maria.jpeg",
        ]);
    }
}