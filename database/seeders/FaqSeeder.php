<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder{
    public function run(): void{
        Faq::updateOrCreate([
            'question' => 'What is Kal-Chi?',
            'category' => 'General',
            'answer' => 'Kal-Chi is a creative brand that transforms watermelon into various products, including watermelon rind kimchi, watermelon slushy, and fresh watermelon cuts.',
            'is_active' => true,
        ]);

        Faq::updateOrCreate([
            'question' => 'What is Kal-Chi made from?',
            'category' => 'Product',
            'answer' => 'Kal-Chi is kimchi made from watermelon rind with Korean-inspired flavours.',
            'is_active' => true,
        ]);

        Faq::updateOrCreate([
            'question' => 'What is Kal-Shi?',
            'category' => 'Product',
            'answer' => 'Kal-Shi is a refreshing watermelon slushy designed to accompany your relaxing moments.',
            'is_active' => true,
        ]);

        Faq::updateOrCreate([
            'question' => 'What is Fresh Watermelon?',
            'category' => 'Product',
            'answer' => 'Fresh Watermelon consists of fresh watermelon pieces that are convenient to enjoy as a snack.',
            'is_active' => true,
        ]);

        Faq::updateOrCreate([
            'question' => 'Where can I purchase Kal-Chi products?',
            'category' => 'Ordering',
            'answer' => 'You can find Kal-Chi products through the official Kal-Chi Shopee store or the available ordering channel.',
            'is_active' => true,
        ]);

        Faq::updateOrCreate([
            'question' => 'How can I check product availability?',
            'category' => 'Ordering',
            'answer' => 'Product options and availability may change. Please contact Kal-Chi directly to obtain the latest stock information.',
            'is_active' => true,
        ]);
    }
}