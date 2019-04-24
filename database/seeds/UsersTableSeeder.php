<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => 'John Feitosa',
            'email'      => 'joaohenriquefsf@gmail.com',
            'password'   => bcrypt('123456')
        ]);

        User::create([
            'name'       => 'James Bond',
            'email'      => 'jamesbond@gmail.com',
            'password'   => bcrypt('123456')
        ]);
    }
}
