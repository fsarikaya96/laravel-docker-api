<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = DB::table('categories');
        $category_product = DB::table('category_product');

        $id = $category->insertGetId(['name' => "Electronic", 'slug' => "electronic"]);
        $category->insert(['name' => "Computer/Tablet", 'slug' => "computer-tablet", 'sub_category' => $id]);
        $category->insert(['name' => "TV and Sound Systems ", 'slug' => "tv-and-sound-systems", 'sub_category' => $id]);
        $category->insert(['name' => "Camera", 'slug' => "camera", 'sub_category' => $id]);
        $id = DB::table('categories')->insertGetId(['name' => "Book", 'slug' => 'book']);
        $category->insert(['name' => "Literature", 'slug' => "literature", 'sub_category' => $id]);
        $category->insert(['name' => "Child", 'slug' => "child", 'sub_category' => $id]);
        $category->insert(['name' => "Exam Preparation", 'slug' => "exam-preparation", 'sub_category' => $id]);
        $category->insert(['name' => "Gym", 'slug' => "gym"]);
        $category->insert(['name' => "Personal care", 'slug' => "personal-care"]);
        $category->insert(['name' => "Fashion", 'slug' => "fashion"]);

        $category_product->insert(['category_id' => 1, 'product_id' =>10]);
        $category_product->insert(['category_id' => 1, 'product_id' =>24]);
        $category_product->insert(['category_id' => 2, 'product_id' =>5]);
        $category_product->insert(['category_id' => 4, 'product_id' =>20]);
    }
}
