<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'bla1';
        $t2 = 'bla2';
        $t3 = 'bla3';
        $t4 = 'bla4';
        $t5 = 'bla5';
        $t6 = 'bla6';
        $t7 = 'bla7';
        $t8 = 'bla8';
        $t9 = 'bla9';
        $t10 = 'bla10';

        $p1 = [
            'title'     => $t1,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . '15354696766.jpg',
            'category_id' => 1,
            'slug' => str_slug($t1),
            'user_id' => 1
        ];
        $p2 = [
            'title'     => $t2,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . '1535470315pv3.jpg',
            'category_id' => 3,
            'slug' => str_slug($t2),
            'user_id' => 1
        ];
        $p3 = [
            'title'     => $t3,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'myAvatar.png',
            'category_id' => 1,
            'slug' => str_slug($t3),
            'user_id' => 1
        ];
        $p4 = [
            'title'     => $t4,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'foodie.png',
            'category_id' => 1,
            'slug' => str_slug($t4),
            'user_id' => 1
        ];
        $p5 = [
            'title'     => $t5,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'footd.png',
            'category_id' => 2,
            'slug' => str_slug($t5),
            'user_id' => 1
        ];
        $p6 = [
            'title'     => $t6,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'versus.jpg',
            'category_id' => 1,
            'slug' => str_slug($t6),
            'user_id' => 1
        ];
        $p7 = [
            'title'     => $t7,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . '15356328404.jpg',
            'category_id' => 2,
            'slug' => str_slug($t7),
            'user_id' => 1
        ];
        $p8 = [
            'title'     => $t8,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . '15356323249.jpg',
            'category_id' => 4,
            'slug' => str_slug($t8),
            'user_id' => 1
        ];
        $p9 = [
            'title'     => $t1,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'bugs.jpg',
            'category_id' => 2,
            'slug' => str_slug($t1),
            'user_id' => 1
        ];

        $p10 = [
            'title'     => $t10,
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas pharetra convallis posuere morbi. Purus gravida quis blandit turpis cursus in hac habitasse platea. Convallis convallis tellus id interdum velit. Faucibus a pellentesque sit amet porttitor eget.',
            'featured'  => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . 'gossip.jpg',
            'category_id' => 3,
            'slug' => str_slug($t10),
            'user_id' => 1
        ];


        $c1 = Post::create($p1);
        $c1->tags()->attach([1,2]);

        $c2 = Post::create($p2);
        $c2->tags()->attach([4, 3]);

        $c3 = Post::create($p3);
        $c3->tags()->attach([2]);

        $c4 = Post::create($p4);
        $c4->tags()->attach([3]);

        $c5 = Post::create($p5);
        $c5->tags()->attach([5]);

        $c6 = Post::create($p6);
        $c6->tags()->attach([1]);

        $c7 = Post::create($p7);
        $c7->tags()->attach([2]);

        $c8 = Post::create($p8);
        $c8->tags()->attach([1,3,4]);

        $c9 = Post::create($p9);
        $c9->tags()->attach([2,5,1]);

        $c10 = Post::create($p10);
        $c10->tags()->attach([1,5]);
    }
}
