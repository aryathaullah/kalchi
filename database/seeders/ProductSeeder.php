<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder{
    public function run(): void{
        Product::updateOrCreate([
            'name' => 'Kal-Chi',
            'category' => 'Savoury',
            'tagline' => 'Taste of Korean Flavour',
            'description' => 'Kimchi berbahan kulit semangka dengan cita rasa Korea. Pilihan unik untuk melengkapi makananmu.',
            'image' =>  "public\image\products\Kalchi_Kimchi.jpeg",
            'is_active' => true,
        ]);

        Product::updateOrCreate([
            'name' => 'Kal-Shi',
            'category' => 'Refreshing',
            'tagline' => 'Slushy Cool Down Your Cravings',
            'description' => 'Watermelon slushy yang segar untuk menemani waktu santai, kuliah, atau jalan bareng teman.',
            'image' => "public\image\products\Kalchi_Slushie.jpeg",
            'is_active' => true,
        ]);

        Product::updateOrCreate([
            'name' => 'Fresh Watermelon',
            'category' => 'Fresh Cut',
            'tagline' => 'Sweet, Juicy & Refreshing',
            'description' => 'Potongan semangka segar yang praktis untuk jadi camilan kapan saja.',
            'image' => "public\image\products\Kalchi_Slice.jpeg",
            'is_active' => true,
        ]);
    }
}