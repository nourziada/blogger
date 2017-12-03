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
        App\User::create([
            'name' => 'Nour Ziada',
            'email' => 'eng.nour.ziadaa@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
