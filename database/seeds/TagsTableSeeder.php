<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = [
            'tag' => 'bla1',
            'slug' => str_slug('blah1')
        ];

        $t2 = [
            'tag' => 'bla2',
            'slug' => str_slug('blah2')
        ];

        $t3 = [
            'tag' => 'bla3',
            'slug' => str_slug('blah3')
        ];

        $t4 = [
            'tag' => 'blah4',
            'slug' => str_slug('blah4')
        ];

        $t5 = [
            'tag' => 'blah5',
            'slug' => str_slug('blah5')
        ];

        Tag::Create($t1);
        Tag::create($t2);
        Tag::create($t3);
        Tag::create($t4);
        Tag::create($t5);
    }
}
