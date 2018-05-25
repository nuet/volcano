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
        $faker = Faker\Factory::create();
        App\User::create([
            'name' => 'user',
            'email' =>'user@vulcan.app',
            'password' => bcrypt('123456'),
        ]);
    }
}
