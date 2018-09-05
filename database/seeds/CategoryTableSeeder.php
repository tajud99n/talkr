<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = [
            'name' => 'Lifestyle',
            'slug' => str_slug('Lifestyle')
        ];

        $c2 = [
            'name' => 'Sports',
            'slug' => str_slug('Sports')
        ];

        $c3 = [
            'name' => 'Food',
            'slug' => str_slug('Food')
        ];

        $c4 = [
            'name' => 'Music',
            'slug' => str_slug('Music')
        ];

        $c5 = [
            'name' => 'Columnists',
            'slug' => str_slug('Columnists')
        ];

        Category::create($c1);
        Category::create($c2);
        Category::create($c3);
        Category::create($c4);
        Category::create($c5);
        
    }
}
