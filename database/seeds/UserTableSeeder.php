<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User Name';
        $user->email = 'user@example.com';

        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $manager = new User();
        $manager->name = 'Admin';
        $manager->email = 'Admin@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_admin);
    }
}
