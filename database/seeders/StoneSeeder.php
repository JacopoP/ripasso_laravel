<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stone;
use App\Models\Owner;
use App\Models\Category;

class StoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stones= Stone::factory()->count(50)->make();
        foreach($stones as $stone){
            $own = Owner::find(rand(1, 10));
            $stone->owner()->associate($own);
            $stone->save();
            $nCategories = rand(0, 3);
            $arrCategories = [];
            for($i = 0; $i < $nCategories; $i++)
                $arrCategories[]=rand(1, 12);
            $stone->categories()->sync($arrCategories);
        }
    }
}
