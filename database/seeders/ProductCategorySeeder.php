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
            "Building Materials" => array("Lumber", "Bricks", "Cement", "Steel", "Glass"),
    "Construction Equipment" => array("Excavators", "Cranes", "Concrete mixers", "Bulldozers"),
    "Architectural Elements" => array("Doors", "Windows", "Roofing materials", "Columns", "Balustrades"),
    "Electrical Systems" => array("Wiring", "Switches", "Outlets", "Light fixtures", "Generators"),
    "Plumbing and HVAC" => array("Pipes", "Fittings", "Heating systems", "Cooling systems", "Ventilation"),
    "Safety and Security" => array("Safety helmets", "Security cameras", "Fencing", "Locks"),
    "Site Development" => array("Excavation", "Landscaping", "Paving", "Fencing"),
    "Interior Finishes" => array("Flooring", "Paint", "Cabinets", "Countertops", "Lighting fixtures"),
    "Project Management" => array("Blueprints", "Permits", "Cost estimates", "Project scheduling"),
    "Miscellaneous Construction Supplies" => array("Tarps", "Toolboxes", "Safety vests", "Scaffolding"),
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
