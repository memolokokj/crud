<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Terror";
        $category->description = "Películas que dan miedo";
        $category->save();

        $category = new Category();
        $category->name = "Comedia";
        $category->description = "Películas que dan risa";
        $category->save(); 

        $category = new Category();
        $category->name = "Romance";
        $category->description = "Películas que dan amor";
        $category->save();

        $category = new Category();
        $category->name = "Acción";
        $category->description = "Películas que dan ";
        $category->save();

        $category = new Category();
        $category->name = "Drama";
        $category->description = "Películas que dan suspenso";
        $category->save();

        $category = new Category();
        $category->name = "Animación";
        $category->description = "Películas que dan pena";
        $category->save();
    }
}
