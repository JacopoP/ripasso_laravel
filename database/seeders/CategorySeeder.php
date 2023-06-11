<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'paesaggio',
                'description' => 'pietra che raffigura un paesaggio'
            ],
            [
                'name' => 'oggetto',
                'description' => 'pietra che ricorda un oggetto umano'
            ],
            [
                'name' => 'disegnate',
                'description' => 'pietra che sembrano dipinte'
            ],
            [
                'name' => 'da_contemplare',
                'description' => 'pietra belle'
            ],
            [
                'name' => 'basalto',
                'description' => null
            ],
            [
                'name' => 'palombino',
                'description' => null
            ],
            [
                'name' => 'calcare',
                'description' => null
            ],
            [
                'name' => 'multipli',
                'description' => 'esposizioni di più pietre'
            ],
            [
                'name' => 'montagna_da_vicino',
                'description' => null
            ],
            [
                'name' => 'montagna_da_lontano',
                'description' => null
            ],
            [
                'name' => 'lago',
                'description' => null
            ],
            [
                'name' => 'pozza',
                'description' => null
            ],
        ];
        foreach($categories as $category){
            Category::make($category)->save();
        }
    }
}