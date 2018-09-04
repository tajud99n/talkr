<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'      => 'Giwa Tajudeen',
            'email'     => 'giwa@mail.dev',
            'password'  => bcrypt('password'),
            'admin'     => 1
        ]);

        App\Profile::create([
            'user_id'   => $user->id,
            'avatar'    => '/uploads/avatars/a.png',
            'about'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni illo quibusdam dignissimos ipsum alias, dolore pariatur placeat minus error laboriosam tempora facilis at dicta voluptas sit qui tenetur accusamus.',
            'facebook'  => 'facebook.com',
            'youtube'   => 'youtube.com'
        ]);
    }
}
