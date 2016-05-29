<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alex',
            'password' => 'password',
            'email' => 'alex.mokrencko@yandex.ru',
        ]);
    }
}
