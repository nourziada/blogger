<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'title' => 'Dinixe Blog',
            'number' => '970 599691321',
            'email' => 'eng.nour.ziadaa@gmail.com',
            'address' => 'Palestine - Gaza'
        ]);
    }
}
