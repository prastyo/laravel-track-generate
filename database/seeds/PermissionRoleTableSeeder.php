<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                App\Role::insert([
                        ['name' => 'admin'],
                        ['name' => 'user'],
                ]);

                App\Permission::insert([
                        ['name' => 'roles_view'], // 1
                        ['name' => 'roles_create'], // 2
                        ['name' => 'roles_edit'], // 3
                        ['name' => 'roles_delete'], // 4
                ]);

                App\Permission::insert([
                        ['name' => 'users_view'], // 5
                        ['name' => 'users_create'], // 6
                        ['name' => 'users_edit'], // 7
                        ['name' => 'users_delete'], // 8
                ]);

                $admin = App\Role::where('name', 'admin')->first();
                $admin->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8]);

                $user = App\Role::where('name', 'user')->first();
                $user->permissions()->attach([1, 5]);
        }
}
