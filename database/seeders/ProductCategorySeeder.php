<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetableCategories = array(
            "Galle" => array("127, Galle Road", "25, Havelock Road", "56, Galle Road"),
            "Matara" => array("18, Nupe Road", "03,Main Road, Dehiwala.", " 25A, Bellanwila."),
            "Colombo" => array("10, Colombo Road", "122/31 , Nadiamala, Dehiwala.", "3/12 , Dehiwala."),
            "Kalmunai" => array("50, Batticaloa Road", "23, Maruthamunai Road", "36, Ampara Road"),
            "Anuradhapura" => array("16, Anuradhapura Road", "9, Polonnaruwa Road", "25, Habarana Road"),
            "Trincomalee" => array("30, Trincomalee Road", "11, Nilaveli Road", "22, Batticaloa Road"),
            "Batticaloa" => array("40, Batticaloa Road", "17, Kattankudy Road", "8, Kallady Road"),
            "Kurunegala" => array("33, Kurunegala Road", "15, Kandy Road", "27, Puttalam Road"),
);
        

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}
