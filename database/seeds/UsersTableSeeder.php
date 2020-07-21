<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                App\User::insert([
                        'name' => 'Administrator',
                        'email' => 'admin@email.com',
                        'username' => 'admin',
                        'phone' => '089999999991',
                        'email_verified_at' => now(),
                        'password' => bcrypt('123'),
                        'role_id' => 1,
                        'remember_token' => Str::random(10),
                ]);

                App\User::insert([
                        'name' => 'User',
                        'email' => 'user@email.com',
                        'username' => 'user',
                        'phone' => '089999999992',
                        'email_verified_at' => now(),
                        'password' => bcrypt('123'),
                        'role_id' => 2,
                        'remember_token' => Str::random(10),
                ]);
        }
}
