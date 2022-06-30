<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        DB::table('category_product')->truncate();
        DB::table('users')->truncate();
        User::factory(1)->create();
        Product::factory(50)->create();
        $this->call(CategorySeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
