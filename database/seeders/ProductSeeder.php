<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Kal-Chi',
                'description' => 'Kimchi berbahan kulit semangka dengan cita rasa Korea. Pilihan unik untuk melengkapi makananmu.',
                'type' => 'Savoury',
                'note_text' => 'TASTE OF KOREAN FLAVOUR',
            ],
            [
                'name' => 'Kal-Shi',
                'description' => 'Watermelon slushy yang segar untuk menemani waktu santai, kuliah, atau jalan bareng teman.',
                'type' => 'Refreshing',
                'note_text' => 'COOL DOWN YOUR CRAVINGS',
            ],
            [
                'name' => 'Fresh Watermelon',
                'description' => 'Potongan semangka segar yang praktis untuk menjadi camilan kapan saja.',
                'type' => 'Fresh Cut',
                'note_text' => 'SWEET, JUICY & REFRESHING',
            ],
            [
                'name' => 'Kal-Dip',
                'description' => 'Potongan semangka segar yang disajikan dengan bumbu dip rujak bubuk. Asin, pedas, dan menyegarkan.',
                'type' => 'Fresh Cut',
                'note_text' => 'SALTY, SPICY & REFRESHING',
            ],
        ];

        foreach ($products as $product) {
            Product::Create(
                $product
            );
        }
    }
}
