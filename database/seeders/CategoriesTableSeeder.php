<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
           'name'=>'High Tech',
           'slug'=> 'high-tech',
        ]);

        Category::create([
            'name' => 'books',
            'slug' => 'books'
        ]);

        Category::create([
            'name' => 'furniture',
            'slug' => 'furniture'
        ]);


        Category::create([
            'name' => 'Games',
            'slug' => 'Games'
        ]);


        Category::create([
            'name' => 'Food',
            'slug' => 'Food'
        ]);

    }

}
