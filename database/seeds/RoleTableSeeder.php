<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'user';
        $role_employee->description = 'user of the blog';

    $role_employee->save();
    $role_manager = new Role();
    $role_manager->name = 'admin';
    $role_manager->description = 'admin of the blog';
    $role_manager->save();
    }
}
