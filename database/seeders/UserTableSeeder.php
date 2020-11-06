<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "ParadoX";
        $user->email = "paradox@gmail.com";
        $user->password = bcrypt("123");
        $user->save();
    }
}