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
        App\User::create([
            'name' => 'Jordan Sedano',
            'email' => 'yordan.arcangel@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
