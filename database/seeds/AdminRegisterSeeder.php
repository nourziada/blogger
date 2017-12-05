<?php

use Illuminate\Database\Seeder;

class AdminRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Nour Ziada',
            'email' => 'eng.nour.ziadaa@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads\avatars\original.png',
            'about' => 'Computer and Communication Eng',
            'facebook' => 'facebook.com',
            'youtube' => 'facebook.com',
            'twitter' => 'facebook.com'

        ]);
    }
}
