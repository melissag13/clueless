<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A User';
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'User';
        $role_admin->description = 'An Admin';
        $role_admin->save();
    }
}
